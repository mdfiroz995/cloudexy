<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Course;
use App\Models\Batch_Info;

use Mail;

class ServicesController extends Controller
{
    public function ServicePost( Request $req)
    {

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable | min:10 | max:12',
            'website' => 'required',
            ]);

        $person = new Service;
        $person->name = $req->name;
        $person->email = $req->email;
        $person->phone = $req->phone;
        $person->website = $req->website;
        $person->save();


        \Mail::send('service_email', array(
            'name' => $req->get('name'),
            'email' => $req->get('email'),
            'phone' => $req->get('phone'),
            'website' => $req->get('website'),
        ), function($msg) use ($req)
          {
             $msg->from($req->email);
             $msg->subject('Free Audit Form');
             $msg->to('satishsen@excellencetechnologies.in');
          });

        return redirect()->back()->with('message', 'Your Message Has Been Sent..');

    }

    public function services()
    {
        // dd('akjdhfkj');
        $course = Course::orderBy('id')->get();
        $batch_info = Batch_Info::orderBy('id')->get();


        return view('services',['course'=>$course,'batch_info'=>$batch_info]);
    }


    public function destroy($id)
    {
        $user=Service::find($id);
        $user->delete();
        return redirect()->back()->withSuccess('Services Deleted !!');
    }
}
