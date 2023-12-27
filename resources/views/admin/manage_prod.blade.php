@extends('admin.layout.structure')
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
                <div class="col-md-12">
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
                                        
                                        @if(!empty($data_product))
                                           
                                            @foreach($data_product as $d)
                                                <tr>
                                                    <td>{{$d->id}}</td>
													<td>{{$d->cate_id}}</td>
                                                    <td>{{$d->product_name}}</td>
                                                    <td><img src="{{url('/upload/product/'.$d->file)}}" width="50px"></td>
													<td>{{$d->main_price}}</td>
													<td>{{$d->dis_price}}</td>
                                                    <td>{{$d->description}}</td>
                                                    <td>
                                                       
                                                        <a href="{{url('/editprod/'.$d->id)}}" class="btn btn-danger me-1">Edit</a>
                                                        <a href="{{url('/manage_prod/'.$d->id)}}" class="btn btn-primary me-1">Delete</a>
														
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