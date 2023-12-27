@extends('admin.layout.structure')
@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Employee</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Employee
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                     <form action="{{url('/update_emp/'.$data->id)}}" method="post" enctype="multipart/form-data" role="form">
                                      @csrf   
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input class="form-control" type="text" name="emp_name" value="{{$data->emp_name}}">
                                        </div> 
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="emp_email" value="{{$data->emp_email}}">
                                        </div>
										 <div class="form-group">
                                            <label>Contact No</label>
                                            <input class="form-control" type="tel" name="emp_mobile" value="{{$data->emp_mobile}}">
                                        </div>
										 <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" type="text" name="emp_address" value="{{$data->emp_address}}">
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