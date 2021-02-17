@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Car Categories</h1>
@stop

@section('content')
    <p>Create and manage all car categories from this panel.</p>

    <div class="container-fluid">
    	<div class="row mt-4">
    		<div class="col-md-4">
    			<div class="card shadow shadow-regular">
    				<div class="card-body">
    					<div class="row">
    						<div class="col-md-5 text-center order-2">
								<h2>
                                	<i class="fas fa-bookmark text-primary"></i> {{$categories_count}}
                            	</h2>
    						</div>
    						<div class="col-md-7 text-center order-1">
    							<h3>Total Classes</h2>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="card mt-4 shadow shadow-regular">
    				<div class="card-body">
    					@include('admin.includes.errors')
    					<h3 class="text-center">Create Class</h3>
    					<form class="form-group" action="{{ route('categories.store') }}" method="post">
    						@csrf
    						<input type="text" name="name" class="form-control mt-3" placeholder="Enter car class name" required="required">
    						<div class="row">
    							<div class="col-md-12">
    								<button type="submit" class="btn btn-primary btn-sm btn-block mt-3">Create</button>
    							</div>
    						</div>
    					</form>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-8">
    			<div class="card shadow shadow-regular">
    				<div class="card-body">
    					<h3 class="text-center">All Car Classes</h3>

    					<div class="table-responsive">
    						<table class="table table-bordered table-striped mt-3">
    							<thead>
    								<th>#</th>
    								<th>Name</th>
    								<th>Created</th>
    								<th>Action</th>
    							</thead>
    							<tbody>
    								@foreach($categories as $category)
    								<tr>
    									<td>{{$category->id}}</td>
    									<td>{{$category->name}}</td>
    									<td>{{$category->created_at->diffForHumans()}}</td>
    									<td>
    										<form action="{{ route('categories.destroy', $category->id) }}" method="post">
    											@csrf
    											@method('DELETE')
    											<button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
    										</form>
    									</td>
    								</tr>
    								@endforeach
    							</tbody>
    						</table>
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