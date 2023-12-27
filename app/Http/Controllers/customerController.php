<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\models\country;
use Illuminate\Http\Request;

use Hash;
use Session;
use Alert;

/**load created mail file
use App\Mail\signupemail;
use Mail;**/


class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    function login()
    {
        return view('website/login');
    }
	
	
	function login_auth(Request $request)
    {
		$validated = $request->validate([
		'email' => 'required|email|',
		'password' => 'required|max:8|max:12',]);
		
        $data=customer::where('email','=',$request->email)->first();
		if($data)
		{
			if(Hash::check($request->password,$data->password))
			{
				if($data->status=="Unblock")
				{
				// session create
				session()->put('id',$data->id);
				session()->put('firstname',$data->firstname);
				Alert::success('Congrats', 'You\'ve Successfully Login');
				return redirect('index');
				}
				else
				{
					Alert::success('Fail', 'Login Failed Due To Blocked Account');
				    return redirect()->back();
				}
				
				// use session => session('name') / // session()->get('name')
				
				Alert::success('Congrats', 'You\'ve Successfully Login');
				return redirect('index');
			}
			else
			{
				Alert::error('Failed', 'Wrong Password');
				return redirect()->back();
			}
		}
		else
		{
			    Alert::error('Failed', 'Wrong Email');
				return redirect()->back();
		}
    }
	
	
	function logout()
    {
        // session delete
		session()->pull('id');
		session()->pull('firstname');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('login');
		
    }
	
	 /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=country::all();
		return view('website/signup',['country'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		/**$validated = $request->validate([
		'firstname' => 'required|string|max:255',
		'lastname' => 'required|string|max:255',
		'email' => 'required|email',
		'password' => 'required|mix:4|max:12',
		'mobile' => 'required|digit|min:10|max:10',
		'address' => 'required',
		'gender'=> 'required|in:male,female',
		'language' => 'required|in:en,fr,es',
		'cid' => 'required',
		'file' => 'required|image'
		]);**/
		
        $data=new customer;
		$data->firstname=$request->firstname;
		$data->lastname=$request->lastname;
		$data->email=$request->email;
		$data->password=Hash::make($request->password);
		$data->mobile=$request->mobile;
		$data->address=$request->address;
		$data->gender=$request->gender;
		$data->languages=implode(",",$request->languages);
		$data->cid=$request->cid;
		
		//img upload
		$file=$request->file('file');
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/customer/',$filename);   // use move for move image in public/images
		$data->file=$filename;
		
		
		$data->save();
		
		/**$maildata=array("namemail"=>$namemail);
		Mail::to($email)->send(new signupemail($maildata));**/
		
		Alert::success('Congrats', 'You\'ve Successfully Registered');
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        $data=customer::all();
		return view('admin/manage_cus',['data_customer'=>$data]);
    }
     
    
    /**
     * Show the form for editing the specified resource.
     */
	 
	public function profile(customer $customer)
    {
        $data=customer::where('id',session('id'))->first();
		return view('website/profile',['data'=>$data]);
    }
	
	
    public function edit(customer $customer,$id)
    {
        $countrydata=country::all();
		$data=customer::find($id);
		return view('website/editprofile',['country'=>$countrydata,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer,$id)
    {
        $data=customer::find($id);
		$data->firstname=$request->firstname;
		$data->lastname=$request->lastname;
		$data->email=$request->email;
		$data->mobile=$request->mobile;
		$data->address=$request->address;
		$data->gender=$request->gender;
		$data->languages=implode(",",$request->languages);
		$data->cid=$request->cid;
		
		//img upload
		if($request->hasFile('file'))
		{
			$old_img=$data->file;
			unlink('upload/customer/'.$old_img);
			
			
		    $file=$request->file('file');
		    $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		    $file->move('upload/customer/',$filename);   // use move for move image in public/images
		    $data->file=$filename;
		}
		
		$data->update();
		Alert::success('Congrats', 'You\'ve Successfully Updated');
		return redirect('/profile');
    }
	
	public function status(customer $customer,$id)
    {
        $data=customer::find($id);
		$status=$data->status;
	
		if($status=="Block")
		{
			$data->status="Unblock";
			$data->update();
			Alert::success('Congrats', 'You\'ve Successfully Unblock Customer');
            return redirect('/manage_cus');	
		}
		else
		{
			$data->status="Block";
			$data->update();
		    Alert::success('Congrats', 'You\'ve Successfully Block Customer');
            return redirect('/manage_cus');
		}
		customer::find($id)->delete();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer,$id)
    {
        // get id data img
		$data=customer::find($id);   //get only one data in string
		$filename=$data->file;
		
		// data delete with unlink image
		customer::find($id)->delete();
		if($filename!="")
		{
			unlink('upload/customer/'.$filename);
		}
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect()->back();
		
    }
}
