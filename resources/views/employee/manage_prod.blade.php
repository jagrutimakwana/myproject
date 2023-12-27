@extends('employee.layout.structure')
@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Products</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-8">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Products
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Product_id</th>
                                            <th>Category_id</th>
                                            <th>Product_name</th>
                                            <th>Product_image</th>
											<th>Main_price</th>
											<th>Dis_price</th>
											<th>Description</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @if(!empty($data_products))
                                           
                                            @foreach($data_products as $d)
                                                <tr>
                                                    <td>{{$d->product_id}}</td>
													<td>{{$d->category_id}}</td>
                                                    <td>{{$d->product_name}}</td>
                                                    <td><img src="" width="50px"></td>
													<td>{{$d->main_price}}</td>
													<td>{{$d->dis_price}}</td>
                                                    <td>{{$d->description}}</td>
                                                    <td>
                                                       
                                                        <a href="" class="btn btn-danger me-1">Edit</a>
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