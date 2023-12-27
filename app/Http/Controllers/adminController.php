<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

use session;
use Hash;
use Alert;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }
	
	public function admin_login()
    {
        return view('admin/admin_login');
    }
	
	
	function login_auth(Request $request)
    {
        $data=admin::where('admin_name','=',$request->admin_name)->first();
		if($data)
		{
			if(Hash::check($request->admin_password,$data->admin_password))
			{
				// session create
				session()->put('id',$data->id);
				session()->put('admin_name',$data->admin_name);
				
				// use session => session('name') / // session()->get('name')
				
				Alert::success('Congrats', 'You\'ve Successfully Login');
				return redirect('/dashboard');
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
	
	function adminlogout()
    {
        // session delete
		session()->pull('id');
		session()->pull('admin_name');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/admin_login');
		
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}
