<?php
 
namespace App\Http\Controllers;
use Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
public function mail(Request $request)
{
    // dd($request->all());
    $mailData="Thankyou For Contacting Us!";
    // [
    //     "title"=> "mail form Laravel",
    //     "body"=> "this is for testing email",
    // ];
    // Mail::to('syedhussain1774@gmail.com')->send(new SendMail($mailData));
    Mail::to($request->email)->send(new SendMail($mailData));

    return Redirect::back()->with('success','Mail sent');
}
}