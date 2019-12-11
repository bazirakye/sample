@extends('admin.dashboard')
	
	@section('content')
		<div class="content-wrapper">
			{!! Form::open(['method' => 'POST']) !!}
			   
			    <section class="content">
      
					<div class="card">
					    <div class="card-header">
					      <h3 class="card-title">Add New Product</h3>
					        <div>
					    		<div class="float-right">
					    			<button class="btn btn-outline-danger" type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
					    			<button class="btn btn-outline-success" type="button"><i class="fa fa-save"></i> Save</button>
					    		</div>
					  		</div>
					    </div>
					    <div class="card-body">
					    	<div class="row">
					    		<div class="col-2">
					    			
					    		</div>
					    		<div class="col-8">
					    			<div class="card card-primary card-outline">
							          <div class="card-header">
							            <h3 class="card-title">
							              <i class="fas fa-edit"></i>
							              Add Product Details
							            </h3>
							          </div>
							          <div class="card-body">		            
							         
							            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
							              <li class="nav-item">
							                <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">General</a>
							              </li>
							              <li class="nav-item">
							                <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Data</a>
							              </li>
							              <li class="nav-item">
							                <a class="nav-link" id="custom-content-above-messages-tab" data-toggle="pill" href="#custom-content-above-messages" role="tab" aria-controls="custom-content-above-messages" aria-selected="false">Specifications</a>
							              </li>
							              <li class="nav-item">
							                <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill" href="#custom-content-above-settings" role="tab" aria-controls="custom-content-above-settings" aria-selected="false">Related</a>
							              </li>
							              <li class="nav-item">
							                <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill" href="#custom-content-above-settings" role="tab" aria-controls="custom-content-above-settings" aria-selected="false">Discounts</a>
							              </li>
							              <li class="nav-item">
							                <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill" href="#custom-content-above-settings" role="tab" aria-controls="custom-content-above-settings" aria-selected="false">Images</a>
							              </li>
							            </ul>

							            <div class="tab-content" id="custom-content-above-tabContent">
							              <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
							              	<hr>
							                 	<div class="form-group">						                 
										    	{{Form::label('productStatus', 'Published')}}&nbsp &nbsp &nbsp

										    	{{Form::checkbox('productStatu', 'value', true,['checked data-toggle'=>'toggle'])}}								    	
								    			</div>
								    			<div class="form-group">
											    	{{Form::label('productName', 'Product Name')}}
											    	{{Form::text('productName', '', ['class' => 'form-control', 'placeholder' =>'Product Name'])}}
											    </div>
											    <div class="form-group">
											    	{{Form::label('productDesc', 'Description')}}
											    	{{Form::textarea('productDesc', '', ['class' => 'form-control', 'placeholder' =>'Product Name'])}}
											    </div>
											  
											    <!-- <div class="form-group">
											    	{{Form::label('categoryDesc', 'Description')}}								    
											    	{{Form::file('image', ['class' => 'form-control'])}}
											    </div> -->

											    <div class="form-group">
											    	{{Form::label('metaData', 'Meta data')}}
											    	{{Form::text('metaData', '', ['class' => 'form-control', 'placeholder' =>'Meta Data'])}}
											    </div>

											    <div class="form-group">
											    	{{Form::label('metaDataDesc', 'Meta Data Description')}}
											    	{{Form::textarea('metaDataDesc', '', ['class' => 'form-control', 'placeholder' =>'Meta Data Description', '20'])}}
											    </div>

											    <div class="form-group">
											    	{{Form::label('tags', 'Tags')}}
											    	{{Form::text('tags', '', ['class' => 'form-control', 'placeholder' =>'Tags'])}}
											    </div>

							              </div>
							              <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
							              	<hr>
							                	<div class="form-group">						                
							                		{{Form::label('tax', 'Select Tax')}}
										    	  	<select class="form-control">
										    	  		<option>Tax Method one</option>
										    	  		<option>Tax Method two</option>
										    	  		<option>No tax</option>
										    	  	</select>						    	
								    			</div>

								    			<div class="form-group">
											    	{{Form::label('productImage', 'Image')}}								    
											    	{{Form::file('image', ['class' => 'form-control'])}}
											    </div>
								    			<div class="form-group">
											    	{{Form::label('miniQty', 'Minimum Quantity')}}
											    	{{Form::number('miniQty', '', ['class' => 'form-control', 'placeholder' =>'Minimum Quantity', 'min' => 1])}}
											    </div>	

											    <div class="form-group">
											    	{{Form::label('subStock', 'Subtract Stock')}}
											    	<select class="form-control" name="subStock">
										    	  		<option>Yes</option>									
										    	  		<option>No</option>
										    	  	</select>
											    </div>

											    <div class="form-group">
											    	{{Form::label('reqShipping', 'Require Shipping')}}
											    	<select class="form-control" name="subStock">
										    	  		<option>Yes</option>									
										    	  		<option>No</option>
										    	  	</select>
											    </div>

											    <div class="form-group">
											    	{{Form::label('dateForDisplay', 'Date to be Displayed')}}
											    	{{Form::date('dateForDisplay', '', ['class' => 'form-control', 'placeholder' =>'Date to Display'])}}
											    </div>

											    <div class="form-group">
											    	{{Form::label('tags', 'Length')}}
											    	{{Form::text('tags', '', ['class' => 'form-control', 'placeholder' =>'Length'])}}
											    </div>

											    <div class="form-group">
											    	{{Form::label('tags', 'Width')}}
											    	{{Form::text('tags', '', ['class' => 'form-control', 'placeholder' =>'Width'])}}
											    </div>

											    <div class="form-group">
											    	{{Form::label('tags', 'Height')}}
											    	{{Form::text('tags', '', ['class' => 'form-control', 'placeholder' =>'Height'])}}
											    </div>

											    <div class="form-group">
											    	{{Form::label('tags', 'Weight')}}
											    	{{Form::text('tags', '', ['class' => 'form-control', 'placeholder' =>'Weight'])}}
											    </div>

											    <div class="form-group">
											    	{{Form::label('lengthMethod', 'Length Method')}}
											    	<select class="form-control" name="subStock">
										    	  		<option>Metre</option>									
										    	  		<option>Centimetre</option>
										    	  		<option>Inches</option>									
										    	  		<option>Milimetre</option>
										    	  	</select>
											    </div>

											    <div class="form-group">
											    	{{Form::label('weightMethod', 'Weight Method')}}
											    	<select class="form-control" name="subStock">
										    	  		<option>Kilogram</option>								
										    	  		<option>Gram</option>
										    	  		<option>Pounds</option>							
										    	  	</select>
											    </div>

											    <div class="form-group">
											    	{{Form::label('featured', 'Featured')}} &nbsp &nbsp &nbsp											    	{{Form::checkbox('featured', 'value')}}											    	
											    </div>
							              </div>

							              <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel" aria-labelledby="custom-content-above-messages-tab">
							              	<hr>
							              		<div class="form-group">
											    	{{Form::label('productModel', 'Product Model')}}
											    	{{Form::text('productModel', '', ['class' => 'form-control', 'placeholder' =>'Product Model'])}}
											    </div>
							                 	<div class="form-group">
											    	{{Form::label('productPrice', 'Price')}}
											    	{{Form::text('productPrice', '', ['class' => 'form-control', 'placeholder' =>'Price'])}}
											    </div>

											    <div class="form-group">
											    	{{Form::label('quantity', 'Quantity')}}
											    	{{Form::number('quantity', '', ['class' => 'form-control', 'placeholder' =>'Quantity'])}}
											    </div>
												
							              </div>
							              <div class="tab-pane fade" id="custom-content-above-settings" role="tabpanel" aria-labelledby="custom-content-above-settings-tab">
							              	<hr>
							                	<div class="form-group">
											    	{{Form::label('Supplier', 'Supplier')}}
											    	<select class="form-control" name="subStock">
										    	  		<option>Supplier One</option>							
										    	  		<option>Supplier two</option>
										    	  		<option>Supplier three</option>							
										    	  	</select>
											    </div>

								                <div class="form-group">
								                  {{Form::label('relatedProduct', 'Select Category')}}
								                  <select class="form-control select2" style="width: 100%;">
								                    <option selected="selected">Select Category</option>
								                    <option>Category One</option>
								                    <option>Category two</option>
								                    <option>Category three</option>
								                    <option>Category four</option>
								                    <option>Category five</option>
								                    <option>Category six</option>
								                    <option>Category seven</option>
								                  </select>
								                </div>
												<div class="form-group">
								                 {{Form::label('relatedProduct', 'Related Products')}}
								                  <select class="select2bs4" multiple="multiple" placeholder="Select Related Products" style="width: 100%;">
								                    <option>Product One</option>
								                    <option>Product two</option>
								                    <option>Product three</option>
								                    <option>Product four</option>
								                    <option>Product five</option>
								                    <option>Product six</option>
								                    <option>Product seven</option>
								                  </select>
								                </div> 
							              </div>
							            </div>
							          </div>
							          <!-- /.card -->
							        </div>
					    		</div>
					    		<div class="col-2">
					    			
					    		</div>
					    	</div>
					    </div>
					    <div class="card-footer">					      
					        <div>
					    		<div class="float-right">
					    			<button class="btn btn-outline-danger" type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
					    			<button class="btn btn-outline-success" type="button"><i class="fa fa-save"></i> Save</button>
					    		</div>
					  		</div>
					    </div>
					</div>
				</section>


			{!! Form::close() !!}
			          
        </div>     

    </section>
	


	@endsection