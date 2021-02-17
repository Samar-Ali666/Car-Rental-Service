@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Car</h1>
@stop

@section('content')
    <p>Create your all new cars from this panel.</p>

    <div class="container-fluid">
    	<div class="row mt-4">
    		<div class="col-md-12">
    			<div class="card shadow shadow-regular">
    				<div class="card-body">
    					<h3>Create New Car</h3>

    					<form action="{{ route('cars.store') }}" method="post" class="form-group mt-3" enctype="multipart/form-data">
    						@csrf
    						<div class="input-group mb-3">
								<div class="input-group-prepend">
								    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
								  </div>
								  <div class="custom-file">
								    <input name="photo_id" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required="required">
								    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								  </div>
							</div>
							<div class="row mt-4">
								<div class="col-md-4">
									<label for="car-name">Car Name:</label>
									<input name="name" type="text" class="form-control mb-3" placeholder="Enter car name" required="required">
								</div>
								<div class="col-md-4">
									<label for="rent">Rent:</label>
									<input name="rent" type="number" class="form-control mb-3" placeholder="Enter car rent" min="1" required="required">
								</div>
								<div class="col-md-4">
									<label for="category">Category:</label>
									<select name="category_id" class="custom-select" required="required">
									  <option selected>Select your car category</option>
									  @foreach($categories as $category)
									  <option value="{{$category->id}}">{{$category->name}}</option>
									  @endforeach
									</select>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-12">
									<textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Write some short description about car with 20 - 30 words......." required="required"></textarea>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-2">
									<button type="submit" class="btn btn-success btn-block"><i class="fas fa-plus-circle"> Create</i></button>
								</div>
							</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
@stop