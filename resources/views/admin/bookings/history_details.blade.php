@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Booking History Details</h1>
@stop
    
@section('content')
    <p>Watch your all booking history details from this panel.</p>

    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card shadow shadow-regular">
                    <div class="card-body">
                        <img class="img-fluid" src="{{$booking->car->photo->file}}" alt="car photo">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow shadow-regular">
                    <div class="card-body">
                            <h3 class="mb-4">Booking Details</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <form class="form-group">
                                    <label for="name">User Name:</label>
                                    <input class="form-control" type="text" name="name" value="{{$booking->user->name}}" disabled="disabled">
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form class="form-group">
                                    <label for="category">Contact:</label>
                                    <input class="form-control" type="text" name="category" value="{{$booking->contact}}" disabled="disabled">
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form class="form-group">
                                    <label for="category">Email:</label>
                                    <input class="form-control" type="text" name="category" value="{{$booking->email}}" disabled="disabled">
                                </form>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-md-4">
                                <form class="form-group">
                                    <label for="name">Car Name:</label>
                                    <input class="form-control" type="text" name="name" value="{{$booking->car->name}}" disabled="disabled">
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form class="form-group">
                                    <label for="category">City:</label>
                                    <input class="form-control" type="text" name="category" value="{{$booking->city}}" disabled="disabled">
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form class="form-group">
                                    <label for="category">Zip:</label>
                                    <input class="form-control" type="text" name="category" value="{{$booking->zip}}" disabled="disabled">
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <form class="form-group">
                                    <label for="category">Rent / per day:</label>
                                    <input class="form-control" type="text" name="category" value="{{$booking->car->rent}}" disabled="disabled">
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form class="form-group">
                                    <label for="category">Days:</label>
                                    <input class="form-control" type="text" name="category" value="{{$booking->days}}" disabled="disabled">
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form class="form-group">
                                    <label for="name">Total:</label>
                                    <input class="form-control" type="text" name="name" value="{{$booking->total}}" disabled="disabled">
                                </form>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-md-12">
                        		<form class="form-group">
                        			<textarea class="form-control" name="address" id="" cols="30" rows="6" disabled="dsdiabled">{{$booking->address}}</textarea>

                        		</form>
                        	</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('history.index') }}" class="btn btn-primary mr-2">
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                </a>
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