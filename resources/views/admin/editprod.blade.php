@extends('admin.layout.structure')
@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Edit Products</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Products
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    
                          <form action="{{url('/updateprod/'.$data->id)}}" method="post" enctype="multipart/form-data" role="form">
                            @csrf 
							<div class="form-group">
                                            <label>Product name</label>
                                            <input class="form-control" type="text" name="product_name" value="{{$data->product_name}}">
											</div>
						    <div class="form-group">
                                            <label>Category id</label>
                                            <input class="form-control" type="number" name="cate_id" value="{{$data->cate_id}}">
											</div>
											
							<div class="form-group">
                                            <label>Product image</label>
                                            <input class="form-control" type="file" name="file">
											<img src="{{url('upload/product/'.$data->file)}}" width="50px" alt="">
											</div>
											
                            <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" type="text" name="description" value="{{$data->description}}">
											</div>
						    <div class="form-group">
                                            <label>Main_price</label>
                                            <input class="form-control" type="text" name="main_price" value="{{$data->main_price}}">
											</div>
						    <div class="form-group">
                                            <label>Discount_price</label>
                                            <input class="form-control" type="text" name="dis_price" value="{{$data->dis_price}}">
											</div>
                            
                            
                            <div class="form-group">
							     <input type="submit" name="submit" value="Save" class="btn btn-primary">
							</div>
							</form>
                                    
                       </div>
                  </div>
             </div>
    
                                 
    </div>
	</div>
	</div>
                                
                                
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     
@endsection