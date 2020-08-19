<?php

namespace App\Http\Controllers;
use App\contact_history;
use App\application_history;
use Mail;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function index(){

        $datas = \App\Repositories\Pick::getDatabase();

        return view('welcome')->with('datas',$datas);
    }

    public function aboutUs(){

        return view("about-us");
    }

    public function property(){

        $datas = \App\Repositories\Pick::getDatabase();
        return view("properties")->with('datas' , $datas);
    }

    public function propertyDetail(){
        return view("property-detail");
    }

    public function faq(){

        $datas = \App\Repositories\Faq::getFaq();
        return view("faq")->with('datas' , $datas);
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
          'g-recaptcha-response' => 'required|captcha',
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
         'admin_email' => 'info@primenest.ng',
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

    public function applicationConfirm(){
        // return request()->all();
        /*  validate the input */
           $this->validate( request() , array(
             'surname' => 'required',
             'other_name' => 'required',
             'phone' => 'required',
             'property_type' => 'required',
             'payment_option' => 'required',
             'g-recaptcha-response' => 'required|captcha',
           ));

        //    return request();

        /* save the input into the database */
            $db_data = new application_history();
            $db_data->surname = request()->surname;
            $db_data->other_name = request()->other_name;
            $db_data->phone = request()->phone;
            $db_data->property_type = request()->property_type;
            $db_data->payment_option = request()->payment_option;

            $db_data->save();


        /* store the input in data */
          $data = array(
           'surname' => request()->surname,
            'other_name' => request()->other_name,
            'phone' => request()->phone,
            'property_type' => request()->property_type,
            'payment_option' => request()->payment_option,
            'admin_email' => 'info@primenest.ng',
            'created_at' => $db_data->created_at,
            // 'created_at' => $db_data->created_at,
          );

        /* send notification email to the admin */
          Mail::send('emails.application_notification' , $data , function($m) use($data){
           $m->to($data['admin_email'])->subject('Application Form Notification');
          });

        /* return back */
        session()->flash('success_report' , 'Application submitted successfully');
        return back();
    }
}
