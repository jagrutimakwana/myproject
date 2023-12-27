<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Alert;

/**load created mail file
use App\Mail\contactemail;
use Mail;**/


class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website/contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		/**$validated = $request->validate([
		'contact_name' => 'required|string|max:255',
		'mobile_no' => 'required|digit|min:10|max:10',
		'email' => 'required|email',
		'message' => 'required',
		]);**/
		
	    $data=new contact;
		$contact_name=$data->contact_name=$request->contact_name;
		$data->mobile_no=$request->mobile_no;
		$email=$data->email=$request->email;
		$data->message=$request->message;
		$data->save();
		
		/**$maildata=array("contact_name"=>$contact_name,"email"=>$email);
		Mail::to($email)->send(new contactemail($maildata));**/
		
		Alert::success('Congrats', 'You\'ve Successfully Registered');
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        $data=contact::all();
		return view('admin/manage_cont',['data_contact'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        contact::find($id)->delete();
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
		return redirect()->back();
    }
}
