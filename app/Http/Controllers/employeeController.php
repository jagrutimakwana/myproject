<?php

namespace App\Http\Controllers;

use App\Models\employee;

use Illuminate\Http\Request;

use session;
use Hash;
use Alert;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function emp_login()
    {
        return view('employee/emp_login');
    }
	
	function emplogin_auth(Request $request)
    {
        $data=employee::where('emp_name','=',$request->emp_name)->first();
		if($data)
		{
			if(Hash::check($request->emp_password,$data->emp_password))
			{
				// session create
				session()->put('id',$data->id);
				session()->put('emp_name',$data->emp_name);
				
				// use session => session('name') / // session()->get('name')
				
				Alert::success('Congrats', 'You\'ve Successfully Login');
				return redirect('emp_dashboard');
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
	
	function emplogout()
    {
        // session delete
		session()->pull('id');
		session()->pull('firstname');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('emp_login');
		
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/add_emp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         /**
        $validated = $request->validate([
		'name' => 'required|string|max:255',
		'email' => 'required|email',
		'contact_no' => 'required|digit|min:10|max:10',
		'file' => 'required|image'
		]);**/
		
		
        $data=new employee;
		$data->emp_name=$request->emp_name;
		$data->emp_email=$request->emp_email;
		$data->emp_password=Hash::make($request->emp_password);
		$data->emp_mobile=$request->emp_mobile;
		$data->emp_address=$request->emp_address;
		
		
		$data->save();
		Alert::success('Congrats', 'You\'ve Successfully Registered');
		return redirect()->back();
    }
    

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        $data=employee::all();
		return view('admin/manage_emp',['data_employee'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee,$id)
    {
        $data=employee::find($id);
		return view('admin/editemp',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_emp(Request $request, employee $employee,$id)
    {
        $data=employee::find($id);
		$data->emp_name=$request->emp_name;
		$data->emp_email=$request->emp_email;
		$data->emp_mobile=$request->emp_mobile;
		$data->emp_address=$request->emp_address;
		
		$data->update();
		Alert::success('Congrats', 'You\'ve Successfully Updated');
		return redirect('/manage_emp');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee,$id)
    {
        // get id data img
		$data=employee::find($id);   //get only one data in string
		$filename=$data->file;
		
		// data delete with unlink image
		employee::find($id)->delete();
		if($filename!="")
		{
			unlink('upload/customer/'.$filename);
		}
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect()->back();
    }
}
