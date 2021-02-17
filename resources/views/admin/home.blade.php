@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-4">
    			<div class="card shadow shadow-regular">
    				<div class="card-body">
    					<div class="row">
    						<div class="col-md-5 text-center order-2">
								<h2>
                                	<i class="fas fa-dollar-sign text-success"></i> + 4000.00
                            	</h2>
    						</div>
    						<div class="col-md-7 text-center order-1">
    							<h3>Total Revenue</h2>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div style="" class="card shadow shadow-regular">
    				<div class="card-body">
    					<h3 class="text-center">Recent Bookings</h3>

    					<div class="table-responsive">
    						<table class="table">
    							<thead>
    								<th>#</th>
    								<th>car</th>
    								<th>name</th>
    								<th>status</th>
    								<th>Actions</th>
    							</thead>
    							<tbody>
    								@foreach($bookings as $booking)
    								<tr>
    									<td>{{$booking->id}}</td>
    									<td><img style="height: 30px;" src="{{$booking->car->photo->file}}" alt=""></td>
    									<td>{{$booking->car->name}}</td>
    									<td><span class="badge badge-success">active</span></td>
    									<td>
    										<a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-primary btn-sm">
    											<i class="fas fa-eye"></i>
    										</a>
    									</td>
    								</tr>
    								@endforeach
    							</tbody>
    						</table>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-8">
    			<div class="row">
    				<div class="col-md-4">
    					<div class="card shadow shadow-regular">
    						<div class="card-body">
							<div class="row">
    						<div class="col-md-5 text-center order-2">
								<h2>
                                	<i class="fas fa-car text-info"></i> 10
                            	</h2>
    						</div>
    						<div class="col-md-7 text-center order-1">
    							<h3>Cars</h2>
    						</div>
    					</div>
    						</div>
    					</div>
    				</div>
    				<div class="col-md-4">
    					<div class="card shadow shadow-regular">
    						<div class="card-body">
    							<div class="row">
    						<div class="col-md-5 text-center order-2">
								<h2>
                                	<i class="fas fa-bookmark text-info"></i> 4
                            	</h2>
    						</div>
    						<div class="col-md-7 text-center order-1">
    							<h3>Categories</h2>
    						</div>
    					</div>
    						</div>
    					</div>
    				</div>
    				<div class="col-md-4">
    					<div class="card shadow shadow-regular">
    						<div class="card-body">
    							<div class="row">
    						<div class="col-md-5 text-center order-2">
								<h2>
                                	<i class="fas fa-users text-info"></i> 6
                            	</h2>
    						</div>
    						<div class="col-md-7 text-center order-1">
    							<h3>Users</h2>
    						</div>
    					</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="card shadow shadow-regular">
    				<div class="card-body">
    					<h3>All Users</h3>

    					<div class="table-responsive">
    						<table class="table table-bordered">
    							<thead class="">
    								<th>#</th>
    								<th>Name</th>
    								<th>Email</th>
    								<th>Registered</th>
    								<th>Actions</th>
    							</thead>
    							<tbody>
    								@foreach($users as $user)
    								<tr>
    									<td>{{$user->id}}</td>
    									<td>{{$user->name}}</td>
    									<td>{{$user->email}}</td>
    									<td>{{$user->created_at->diffForHumans()}}</td>
    									<td>
    										<a href="#" class="btn btn-primary btn-sm">
    											<i class="fas fa-eye"></i>
    										</a>
    									</td>
    								</tr>
    								@endforeach
    							</tbody>
    						</table>
    					</div>
    				</div>
    				<div class="row">
    					<div class="col-md-4 offset-4">
    						{{$users->render()}}
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