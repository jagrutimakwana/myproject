<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;

use Hash;
use Session;

use Alert;

class productController extends Controller
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
        return view('admin/add_prod');
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
		
		
        $data=new product;
		$data->product_name=$request->product_name;
        $data->cate_id=$request->cate_id;
		
		//img upload
		$file=$request->file('file');
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/product/',$filename);   // use move for move image in public/images
		$data->file=$filename;
		
		$data->description=$request->description;
		$data->main_price=$request->main_price;
		$data->dis_price=$request->dis_price;
	    
		
		$data->save();
		Alert::success('Congrats', 'You\'ve Successfully Registered');
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        $data=product::all();
		return view('admin/manage_prod',['data_product'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product,$id)
    {
        $data=product::find($id);
		return view('admin/editprod',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateprod(Request $request, product $product,$id)
    {
        $data=product::find($id);
		$data->product_name=$request->product_name;
        $data->cate_id=$request->cate_id;
		
		
		  //img upload
		if($request->hasFile('file'))
		{
			$old_img=$data->file;
			unlink('upload/product/'.$old_img);
			
			
		    $file=$request->file('file');
		    $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		    $file->move('upload/product/',$filename);   // use move for move image in public/images
		    $data->file=$filename;
		}
		
		$data->description=$request->description;
		$data->main_price=$request->main_price;
		$data->dis_price=$request->dis_price;
		
		$data->update();
		Alert::success('Congrats', 'You\'ve Successfully Updated');
		return redirect('/manage_prod');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product,$id)
    {
         // get id data img
		$data=product::find($id);   //get only one data in string
		$filename=$data->file;
		
		// data delete with unlink image
		product::find($id)->delete();
		if($filename!="")
		{
			unlink('upload/product/'.$filename);
		}
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect()->back();
    }
}
