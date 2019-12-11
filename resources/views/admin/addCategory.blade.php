@extends('admin.dashboard')
	
	@section('content')
		<div class="content-wrapper">
			{!! Form::open(['method' => 'POST']) !!}
			   
			    <section class="content">
      
					<div class="card">
					    <div class="card-header">
					      <h3 class="card-title">Add New Category</h3>
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
					    			<div class="form-group">
								    	{{Form::label('categoryName', 'Displayed')}}&nbsp &nbsp &nbsp

								    	{{Form::checkbox('name', 'value', true,['checked data-toggle'=>'toggle'])}}

								    	{{-- {{Form::select('animal', [
										    'Cats' => ['leopard' => 'Leopard'],
										    'Dogs' => ['spaniel' => 'Spaniel'],
										], ['class' => 'form-control'])}}
								    </div> --}}
					    			<div class="form-group">
								    	{{Form::label('categoryName', 'Category Name')}}
								    	{{Form::text('categoryName', '', ['class' => 'form-control', 'placeholder' =>'Category Name'])}}
								    </div>
								    <div class="form-group">
								    	{{Form::label('parentCategory', 'Parent Category')}}
								    	<select class="form-control" name="subStock">
								    		<option>--- Select Parent category ---</option>
							    	  		<option>Catgory one</option>									
							    	  		<option>Category Two</option>
							    	  		<option>Category three</option>									
							    	  		<option>Category four</option>
							    	  	</select>
								    </div>
								    <div class="form-group">
								    	{{Form::label('categoryDesc', 'Description')}}
								    	{{Form::textarea('categoryDesc', '', ['class' => 'form-control', 'placeholder' =>'Category Name'])}}
								    </div>
								  
								    <div class="form-group">
								    	{{Form::label('categoryDesc', 'Image')}}								    
								    	{{Form::file('image', ['class' => 'form-control'])}}
								    </div>

								    <div class="form-group">
								    	{{Form::label('metaData', 'Meta data')}}
								    	{{Form::text('metaData', '', ['class' => 'form-control', 'placeholder' =>'Meta Data'])}}
								    </div>

								    <div class="form-group">
								    	{{Form::label('metaDataDesc', 'Meta Data Description')}}
								    	{{Form::textarea('metaDataDesc', '', ['class' => 'form-control', 'placeholder' =>'Meta Data Description', '20'])}}
								    </div>
								    	
					    		</div>
					    		<div class="col-2">
					    			
					    		</div>
					    	</div>
					    </div>
					      <div class="card-footer">					      
					        <div>
					    		<div class="float-right">
					    			<button class="btn btn-outline-danger" data-toggle="tooltip" title="Cancel"type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
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