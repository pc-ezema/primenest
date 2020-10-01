<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Exports\ContactExport;
use Maatwebsite\Excel\Facades\Excel;

class ContactController extends Controller
{
    public function fetch(){

        /** Incoming request */
        // $id = request()->id;

        // if($id){
        //     $datas = Contact::where('id' , $id)->get();
        // }

        // else{
            $datas = Contact::all();
        // }

        /** Create a collection instance */
        $result = collect();

        /** Loop through the data and Push it into the result collection */
        foreach($datas as $data){

            $result->push([
                'id' => $data->id,
                'name' => $data->fullname,
                'email' => $data->email,
                'phone' => $data->phone,
                'message' => $data->message,
                'location' => $data->location,

            ]);
        }

        /** Return a json response object */

        return response()->json(['message' => $result]);

    }

    public function update(){

        /** Request coming in */
        $id = request()->id;
        $name = request()->fullname;
        $email = request()->email;
        $phone = request()->phone;
        $message = request()->message;
        $location = request()->location;

        /** Find id , Update data and save */
        $data = Contact::find($id);
        $data->fullname = $name;
        $data->email = $email;
        $data->phone = $phone;
        $data->message = $message;
        $data->location = $location;

        $data->save();


        /** Return a json response object */
        return response()->json(['message' => 'Data Updated Successfully']);
    }

    public function delete(){
        
        /** Incoming Id */
        $id = request()->id;

        /** Find and delete Id */
        Contact::find($id)->delete();

        /** Return a json response object */
     return response()->json(['message' => 'Deleted Successfully']);

    }

    public function exportable(){
        return Excel::download(new ContactExport, 'contact.xlsx');
    }
}
