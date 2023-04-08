<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    public function contactUsPost( Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable| min:10| max:12',
            'message' => 'required',
            ]);
            
        $person = new Contact;
        $person->name = $req->name;
        $person->email = $req->email;
        $person->phone = $req->phone;
        $person->subject = $req->subject;
        $person->message = $req->message;
        $person->save();

        \Mail::send('contact_email', array(
                 'name' => $req->get('name'),
                 'email' => $req->get('email'),
                 'subject' => $req->get('subject'),
                 'phone' => $req->get('phone'),
                 'messages' => $req->get('message')
             ), function($msg) use ($req)
               {
                  $msg->from($req->email);
                  $msg->subject($req->subject);
                  $msg->to('satishsen@excellencetechnologies.in');
               });

               
        \Mail::send('auto_response', array(
            'name' => $req->get('name'),
            'phone' => $req->get('phone'),
            'subject' => $req->get('subject'),
            ), function($msg) use ($req)
              {
                 $msg->from('satishsen@excellencetechnologies.in');
                 $msg->subject("Thanks for Contacting us");
                 $msg->to($req->email);
              });

               
        return redirect()->back()->with('message', 'Your Message Has Been Sent..');

    }

    public function contactUsGet()
    {
        return view('contact-us');
    }

}
