@extends('employee.layout.structure')
@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Contacts</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-8">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Contacts
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Contact_id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @if(!empty($data_contacts))
                                           
                                            @foreach($data_contacts as $d)
                                                <tr>
                                                    <td>{{$d->contact_id}}</td>
													<td>{{$d->name}}</td>
                                                    <td>{{$d->email}}</td>
                                                    <td>{{$d->message}}</td>
													
                                                    <td>
                                                       <a href="" class="btn btn-danger me-1">Delete</a>
                                                        
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