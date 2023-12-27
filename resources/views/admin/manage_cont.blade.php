@extends('admin.layout.structure')
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
                <div class="col-md-12">
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
                                            <th>Contact Id</th>
                                            <th>Contact Name</th>
											<th>Contact No</th>
                                            <th>Email</th>
                                            <th>Message</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @if(!empty($data_contact))
                                           
                                            @foreach($data_contact as $d)
                                                <tr>
                                                    <td>{{$d->id}}</td>
													<td>{{$d->contact_name}}</td>
													<td>{{$d->mobile_no}}</td>
                                                    <td>{{$d->email}}</td>
                                                    <td>{{$d->message}}</td>
													
                                                    <td>
                                                       <a href="{{url('/manage_cont/'.$d->id)}}" class="btn btn-danger me-1">Delete</a>
                                                        
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