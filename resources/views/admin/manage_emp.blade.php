@extends('admin.layout.structure')
@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Employee</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Employee
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Employee id</th>
                                            <th>Employee name</th>
                                            <th>Email</th>
                                            <th>Contact_no</th>
											<th>Address</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($data_employee))
                                           
                                            @foreach($data_employee as $d)
                                        
                                                <tr>
                                                    <td>{{$d->id}}</td>
													<td>{{$d->emp_name}}</td>
													<td>{{$d->emp_email}}</td>
                                                    <td>{{$d->emp_mobile}}</td>
                                                    <td>{{$d->emp_address}}</td>
													
                                                    <td>
                                                        
                                                        <a href="{{url('/editemp/'.$d->id)}}" class="btn btn-danger me-1">Edit</a>
                                                        <a href="{{url('/manage_emp/'.$d->id)}}" class="btn btn-primary me-1">Delete</a>
														
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