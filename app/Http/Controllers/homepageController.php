<?php

namespace App\Http\Controllers;
use App\contact_history;
use Mail;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function aboutUs(){
        return view("about-us");
    }

    public function property(){
        return view("properties");
    }

    public function propertyDetail(){
        return view("property-detail");
    }

    public function faq(){
        return view("faq");
    }

    public function contactUs(){
        return view("contact-us");
    }

    public function application(){
        return view("application");
    }

    public function contactusConfirm(){
        /* validate the input */
        $this->validate( request() , array(
          'fullname' => 'required',
          'email' => 'required|email',
          'phone' => 'required',
          'message' => 'required',
        ));

        /* store data into the database */
        $db_data = new contact_history();
        $db_data->fullname = request()->fullname;
        $db_data->email = request()->email;
        $db_data->phone = request()->phone;
        $db_data->message = request()->message;
        $db_data->save();

        /* save the input to data */
        $data = array(
         'fullname' => request()->fullname,
         'email' => request()->email,
         'phone' => request()->phone,
         'description' => request()->message,
         'admin_email' => 'admin@primenest.ng',
         'created_at' => $db_data->created_at,
        );

        /* send mail to the admin */

        Mail::send('emails.contact_notification',$data, function($m) use($data){
         $m->to($data['admin_email'])->subject('Contact Us Notification');
        });

        /* return back */
        session()->flash('success_report', 'Contact form submitted successfully');
        return back();
    }
}
