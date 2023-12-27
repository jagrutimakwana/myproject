@extends('employee.layout.structure')
@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Products</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Products
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <form action="" method="post" enctype="multipart/form-data" role="form">
                            <div class="form-group">
                                            <label>Product_name</label>
                                            <input class="form-control" type="text" name="product_name">
											</div>
						    <div class="form-group">
                                            <label>Product_image</label>
                                            <input class="form-control" type="file" name="file">
											</div>
											
                            <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" type="text" name="description">
											</div>
						    <div class="form-group">
                                            <label>Main_price</label>
                                            <input class="form-control" type="text" name="main_price">
											</div>
						    <div class="form-group">
                                            <label>Discount_price</label>
                                            <input class="form-control" type="text" name="dis_price">
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