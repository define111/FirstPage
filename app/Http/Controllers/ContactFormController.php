<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mails;

class ContactFormController extends Controller
{
  public function create(){
    return view('contact.create');
  }

  public function store(){
    $data = request()->validate([
      'name' => 'required',
      'surname' => 'required',
      'email' => 'required|email',
      'message' => 'required',
       ]);
    $mail = new Mails;
    foreach ($data as $key => $value)
    $mail->$key = $value;
    $mail->save();
    // Mail::to($data['email'])->send(new ContactFormMail($data));
    Mail::to('marta.krawczyk@mail.de')->send(new ContactFormMail($data));
    return redirect('contact')->with('message', 'success');
  }

}
