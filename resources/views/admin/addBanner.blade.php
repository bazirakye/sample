@extends('admin.dashboard')
	
	@section('content')
		<div class="content-wrapper">
			{!! Form::open(['method' => 'POST']) !!}
			   
			    <section class="content">
      
					<div class="card">
					    <div class="card-header">
					      <h3 class="card-title">Add New Banner</h3>
					        <div>
					    		<div class="float-right">
					      			 <button class="btn btn-outline-danger" data-toggle="tooltip" title="Cancel" type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
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
								    	{{Form::label('bannerStatus', 'Displayed')}}&nbsp &nbsp &nbsp

								    	{{Form::checkbox('name', 'value', true,['checked data-toggle'=>'toggle'])}}
								    </div> 
					    			<div class="form-group">
								    	{{Form::label('bannerName', 'Banner Name')}}
								    	{{Form::text('bannerName', '', ['class' => 'form-control', 'placeholder' =>'Banner Name'])}}
								    </div>
								    <div class="form-group">
								    	{{Form::label('banner', 'Upload Banner')}}
								    	<span data-toggle="tooltip" style="cursor: pointer;" title="Banner should be 6x6">&nbsp<i class="fa fa-question-circle"></i></span>								    
								    	{{Form::file('image', ['class' => 'form-control'])}}
								    </div>
								    <div class="form-group">
								    	{{Form::label('bannerGroupName', 'Banner Group Name')}}
								    	<select class="form-control" name="subStock">
								    		<option>--- Select Parent category ---</option>
							    	  		<option>Main page banner</option>									
							    	  		<option>other banner</option>
							    	  	</select>
								    </div>
								    <div class="form-group">
								    	{{Form::label('startDate', 'Start Date')}}
								    	{{Form::date('startDate', '', ['class' => 'form-control', 'placeholder' =>'Start Date'])}}
								    </div>
								  
								    <div class="form-group">
								    	{{Form::label('startDate', 'Start Date')}}
								    	{{Form::date('startDate', '', ['class' => 'form-control', 'placeholder' =>'Start Date'])}}
								    </div>

								    <div class="form-group">
								    	{{Form::label('bannerInfo', 'Banner Information')}}
								    	{{Form::text('bannerInfo', '', ['class' => 'form-control', 'placeholder' =>'Banner Information'])}}
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