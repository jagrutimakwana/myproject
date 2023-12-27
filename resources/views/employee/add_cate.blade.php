@extends('employee.layout.structure')
@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Categories</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Categories
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <form action="{{url('/add_cate')}}" method="post" enctype="multipart/form-data">
									 @csrf
                                        <div class="form-group">
                                            <label>Category_Name</label>
                                            <input class="form-control" type="text" name="category_name">
						                </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <label></label>
                                            <input class="form-control" type="text" name="description">
								        </div>
										<div class="form-group">
                                            <label>Category_image</label>
                                            <label></label>
                                            <input class="form-control" type="file" name="file">
								        </div>
                                           
                           
                           
                            
                           
                            <div class="form-group">
							     <input type="submit" name="submit" class="btn btn-primary">
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