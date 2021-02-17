@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>All Cars</h1>
@stop

@section('content')
    <p>Manage all cars from this pannel.</p>

    <div class="container-fluid">
    	{{-- <div class="row mt-4">
    		<div class="col-md-4">
    			<div class="card shadow shadow-regular">
    				<div class="card-body">
    					<div class="row">
    						<div class="col-md-5 text-center order-2">
								<h2>
                                	<i class="fas fa-car text-primary"></i> 3
                            	</h2>
    						</div>
    						<div class="col-md-7 text-center order-1">
    							<h3>Total Cars</h2>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div> --}}
    	<div class="row mt-3">
    		<div class="col-md-12">
    			<div class="card">
    				<div class="card-body shadow shadow-lg">
    					<h3 class="text-center mb-3">Issem's Rental Cars</h3>
    					<div class="table-responsive">
		    				<table class="table table-bordered table-hover">
		    					<thead>
		    						<th>#</th>
		    						<th>Photo</th>
		    						<th>Name</th>
		    						<th>Category</th>
		    						<th>Rent</th>
		    						<th>Description</th>
		    						<th>Created</th>
		    						<th>Updated</th>
		    						<th>Actions</th>
		    					</thead>
		    					<tbody>
		    						@foreach($cars as $car)
		    							<tr>
		    								<td>{{$car->id}}</td>
		    								<td><img style="height: 50px" src="{{$car->photo->file}}" alt="car-photo"></td>
		    								<td>{{$car->name}}</td>
		    								<td>{{$car->category->name}}</td>
		    								<td>{{$car->rent}}</td>
		    								<td>{{\Illuminate\Support\Str::limit($car->description, 20)}}</td>
		    								<td>{{$car->created_at->diffForHumans()}}</td>
		    								<td>{{$car->updated_at->diffForHumans()}}</td>
		    								<td>
		    									<a href="{{ route('cars.show', $car->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
		    								</td>
		    							</tr>
		    						@endforeach
		    					</tbody>
		    				</table>
		    			</div>
		    			<div class="row mt-1">
	    					<div class="col-md-6 offset-5">
	    						{!!$cars->links()!!}    				
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
    @include('sweetalert::alert')
@stop