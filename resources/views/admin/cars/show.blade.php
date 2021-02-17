@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$car->name}}</h1>
@stop

@section('content')
    <p>Watch your all cars on this panel.</p>

    <div class="container-fluid">
    	<div class="row mt-4">
    		<div class="col-md-4">
    			<div class="card shadow shadow-regular">
    				<div class="card-body">
    					<img class="img-fluid" src="{{$car->photo->file}}" alt="car photo">
    				</div>
    			</div>
    		</div>
    		<div class="col-md-8">
    			<div class="card shadow shadow-regular">
					<div class="card-body">
							<h3 class="mb-4">Car Details</h3>
    					<div class="row">
    						<div class="col-md-4">
    							<form class="form-group">
    								<label for="name">Car Name:</label>
    								<input class="form-control" type="text" name="name" value="{{$car->name}}" disabled="disabled">
    							</form>
    						</div>
    						<div class="col-md-4">
    							<form class="form-group">
    								<label for="category">Category:</label>
    								<input class="form-control" type="text" name="category" value="{{$car->category->name}}" disabled="disabled">
    							</form>
    						</div>
    						<div class="col-md-4">
    							<form class="form-group">
    								<label for="category">Rent:</label>
    								<input class="form-control" type="text" name="category" value="{{$car->rent}}" disabled="disabled">
    							</form>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-12">
    							<textarea class="form-control" name="description" id="" cols="30" rows="10" disabled="disabled">{{$car->description}}</textarea>
    						</div>
    					</div>
    					<div class="row mt-3">
    						<div class="col-md-12">
    							<div class="d-flex justify-content-center">
    								<a href="{{ route('cars.index') }}" class="btn btn-primary mr-2 rounded-circle">
									<i class="fas fa-long-arrow-alt-left"></i>
								</a>
								<a href="{{ route('cars.edit', $car->id) }}" class="btn btn-info mr-2 rounded-circle">
									<i class="fas fa-pencil-alt"></i>
								</a>
								<form action="{{ route('cars.destroy', $car->id) }}" method="post">
									@csrf
									@method('DELETE')
									<button type="submit" onclick="return confirm('Are you sure you want to delete car {!! $car->name !!} ?')" class="btn btn-danger mr-2 rounded-circle">
										<i class="fas fa-trash"></i>
									</button>
								</form>
    							</div>
    						</div>
    					</div>	
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