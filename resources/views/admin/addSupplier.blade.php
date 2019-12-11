@extends('admin.dashboard')
	
	@section('content')
		<div class="content-wrapper">
			{!! Form::open(['method' => 'POST']) !!}
			   
			    <section class="content">
      
					<div class="card">
					    <div class="card-header">
					      <h3 class="card-title">Add New Supplier</h3>
					        <div>
					    		<div class="float-right">
					      			 <button class="btn btn-outline-danger" data-toggle="tooltip" data-placement="bottom" title="Cancel" type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
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
								    	{{Form::label('supplierName', 'Supplier Name')}}
								    	{{Form::text('supplierName', '', ['class' => 'form-control', 'placeholder' =>'Supplier Name'])}}
								    </div>
								    <div class="form-group">
								    	{{Form::label('supplierDesc', 'Description')}}
								    	{{Form::textarea('supplierDesc', '', ['class' => 'form-control', 'placeholder' =>'Description'])}}
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