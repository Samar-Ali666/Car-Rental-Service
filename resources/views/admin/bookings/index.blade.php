@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Active Bookings</h1>
@stop

@section('content')
    <p>Manage your all active bookings from this pannel.</p>

    <div class="container-fluid">
        @if(Session::has('completed'))
        <div class="alert alert-success">
            <p>{{session('completed')}}</p>
        </div>
        @elseif(Session::has('canceled'))
        <div class="alert alert-danger">
            <p>{{session('canceled')}}</p>
        </div>
        @endif
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card shadow shadow-regular">
                    <div class="card-body">
                        @if(count($bookings) > 0)
                        <h3 class="text-center">All Active Bookings</h3>

                        <div class="table-responsive">
                            <table class="table table-bordered mt-4">
                                <thead>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Contact</th>
                                    <th>Car</th>
                                    <th>Car Name</th>
                                    <th>Days</th>
                                    <th>Rent</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Recieved</th>
                                    <th>Details</th>
                                </thead>
                                <tbody>
                                    @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{$booking->id}}</td>
                                        <td>{{$booking->user->name}}</td>
                                        <td>{{$booking->contact}}</td>
                                        <td><img style="height: 50px;" src="{{$booking->car->photo->file}}" alt=""></td>
                                        <td>{{$booking->car->name}}</td>
                                        <td>{{$booking->days}}</td>
                                        <td>{{$booking->car->rent}}</td>
                                        <td>{{$booking->type}}</td>
                                        <td><h6><span class="badge badge-primary">active</span></h6></td>
                                        <td>{{$booking->total}}</td>
                                        <td>{{$booking->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <h3 class="text-center">
                            <img class="img-fluid w-50" src="/assets/images/generic/undraw_empty_street_sfxm.svg" alt="">
                        </h3>

                        <h3 class="text-center mt-4 font-weight-bold">You Don't have any active bookings yet.</h3>
                        @endif
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