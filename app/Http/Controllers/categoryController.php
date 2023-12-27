<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

use Hash;
use Session;

use Alert;

class categoryController extends Controller
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
        return view('admin/add_cate');
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
		
		
        $data=new category;
		$data->category_name=$request->category_name;

		
		//img upload
		$file=$request->file('file');
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/category/',$filename);   // use move for move image in public/images
		$data->file=$filename;
		
		$data->description=$request->description;
		
		$data->save();
		Alert::success('Congrats', 'You\'ve Successfully Registered');
		return redirect()->back();
    }
    

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        $data=category::paginate(2);
		return view('admin/manage_cate',['data_category'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category,$id)
    {
        $data=category::find($id);
		return view('admin/editcate',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatecate(Request $request, category $category,$id)
    {
        $data=category::find($id);
		$data->category_name=$request->category_name;
		
		
		  //img upload
		if($request->hasFile('file'))
		{
			$old_img=$data->file;
			unlink('upload/category/'.$old_img);
			
			
		    $file=$request->file('file');
		    $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		    $file->move('upload/category/',$filename);   // use move for move image in public/images
		    $data->file=$filename;
		}
		
		$data->description=$request->description;
		
		$data->update();
		Alert::success('Congrats', 'You\'ve Successfully Updated');
		return redirect('/manage_cate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category,$id)
    {
         // get id data img
		$data=category::find($id);   //get only one data in string
		$filename=$data->file;
		
		// data delete with unlink image
		category::find($id)->delete();
		if($filename!="")
		{
			unlink('upload/category/'.$filename);
		}
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect()->back();
    }
}
