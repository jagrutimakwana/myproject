@extends('employee.layout.structure')
@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Customer</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-8">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Customer
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Customer_id</th>
											<th>Customer_image</th>
                                            <th>Firstname</th>
											<th>Lastname</th>
                                            <th>Email</th>
											<th>Phone_no</th>
											<th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       @if(!empty($data_customers))
                                           
                                            @foreach($data_customers as $d)
                                                <tr>
												
                                                    <td>{{$d->id}}</td>
													<td><img src="{{url('/upload/customer/'.$d->file)}}" width="50px"></td>
													<td>{{$d->firstname}}</td>
													<td>{{$d->lastname}}</td>
                                                    <td>{{$d->email}}</td>
													<td>{{$d->mobile}}</td>
													<td>{{$d->address}}</td>
                                                    
                                                      <td> 
													  <a href="" class="btn btn-danger me-1"></a>
                                                      <a href="" class="btn btn-primary me-1">Delete</a>
														
                                                    </td>
                                                </tr>
                                                 @endforeach
												
												@else
													
												     <tr>
												         <td> DATA NO FOUND</td>
													</tr>
													@endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     
@endsection