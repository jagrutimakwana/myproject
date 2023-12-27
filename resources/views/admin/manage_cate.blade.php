@extends('admin.layout.structure')
@section('main_container')


        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Categories</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Categories
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Category_id</th>
                                            <th>Category_name</th>
                                            <th>Category_img</th>
                                            <th>Description</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                           @if(!empty($data_category))
                                           
                                            @foreach($data_category as $d)
                                            
                                    
                                                <tr>
                                                    <td>{{$d->id}}</td>
                                                    <td>{{$d->category_name}}</td>
                                                    <td><img src="{{url('/upload/category/'.$d->file)}}" width="50px"></td>
                                                    <td>{{$d->description}}</td>
                                                    <td>
                                                       
                                                        <a href="{{url('/editcate/'.$d->id)}}" class="btn btn-danger me-1">Edit</a>
                                                        <a href="{{url('/manage_cate/'.$d->id)}}" class="btn btn-primary me-1">Delete</a>
														
														
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
								
								
								{{$data_category->links()}}
								
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