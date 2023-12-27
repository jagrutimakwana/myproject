@extends('employee.layout.structure')
@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Feedback</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-8">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Feedback
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Feedback_id</th>
                                            <th>Customer_id</th>
                                            <th>Feedback_name</th>
                                            <th>Feedback_comments</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($data_feedbacks))
                                           
                                            @foreach($data_feedbacks as $d)
                                                <tr>
                                                    <td>{{$d->feedback_id}}</td>
													<td>{{$d->customer_id}}</td>
                                                    <td>{{$d->feedback_name}}</td>
                                                    <td>{{$d->feedback_comments}}</td>
													
                                                    <td>
                                                       
                                                       
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