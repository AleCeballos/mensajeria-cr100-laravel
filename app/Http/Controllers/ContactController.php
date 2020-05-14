<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
//use Mail;
use Session;
class ContactController extends Controller
{
  

// OPCION 2
  public function contact(Request $request){
    $subject = "Mensajeria-Marcos-Cr100";
    $for = "correo_que_recibira_el_mensaje@gmail.com";
    Mail::send('email',$request->all(), function($msj) use($subject,$for){
        $msj->from("tucorreo@gmail.com","NombreQueApareceráComoEmisor");
        $msj->subject($subject);
        $msj->to($for);
    });


    Session::flash('success','Your email was sent!');
    return redirect('/');
    //return redirect()->back();
 

}

}
