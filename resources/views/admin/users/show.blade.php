@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>User Profile</h1>
@stop

@section('content')
    <p>See a user profile from this panel.</p>

    <div class="container-fluid text-center">
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img style="height: 150px; width:150px" class="img-responsive img-fluid mb-2 border rounded-circle p-2 border-primary" src="/images/user_icon.png" alt="user_icon">
                                <h4>{{$user->name}}</h4>
                                <i class="fas fa-paper-plane text-danger"></i> <i>{{$user->email}}</i>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <span>
                                        <i class="fas fa-car fa-2x text-primary border border-info rounded-circle p-3"></i>
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b class="text-dark">Bookings</b>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="badge badge-primary">
                                                <b class="text-white">3</b>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <i class="far fa-envelope fa-2x text-primary border border-primary rounded-circle p-3"></i>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b class="text-dark">Mails</b>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="badge badge-primary">
                                                <b class="text-white">3</b>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <i class="fas fa-money-bill-wave fa-2x text-success border border-success rounded-circle p-3"></i>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b class="text-dark">Paid</b>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="badge badge-success">
                                                <b class="text-white">+3244</b>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <nav>
                                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active text-dark font-weight-bold" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Active Bookings</a>
                                    <a class="nav-item nav-link text-dark font-weight-bold" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Rides History</a>
                                    <a class="nav-item nav-link text-dark font-weight-bold" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">User's Insights</a>
                                  </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                      <div class="table-responsive">
                                        <table class="table table-hover mt-3">
                                            <thead class="bg-light">
                                                <th>#</th>
                                                <th>Contact</th>
                                                <th>Car</th>
                                                <th>Model</th>
                                                <th>Days</th>
                                                <th>Rent</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Recived</th>
                                                <th>Details</th>
                                            </thead>
                                            <tbody>
                                                @foreach($userBookings as $booking)
                                                <tr>
                                                    <td>{{$booking->id}}</td>
                                                    <td>{{$booking->contact}}</td>
                                                    <td>
                                                        <img class="" style="height: 40px" src="{{$booking->car->photo->file}}" alt="">
                                                    </td>
                                                    <td>{{$booking->car->name}}</td>
                                                    <td>{{$booking->days}}</td>
                                                    <td>{{$booking->car->rent}}</td>
                                                    <td>
                                                        <span class="badge badge-success">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td>{{$booking->total}}</td>
                                                    <td>{{$booking->created_at->diffForHumans()}}</td>
                                                    <td>
                                                        <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-primary">
                                                            <span>
                                                                <i class="fas fa-eye"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="table-responsive">
                                        <table class="table table-hover mt-3">
                                            <thead class="bg-light">
                                                <th>#</th>
                                                <th>Contact</th>
                                                <th>Car</th>
                                                <th>Model</th>
                                                <th>Days</th>
                                                <th>Rent</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Recived</th>
                                                <th>Details</th>
                                            </thead>
                                            <tbody>
                                                @foreach($userBookingsHistory as $booking_history)
                                                <tr>
                                                    <td>{{$booking_history->id}}</td>
                                                    <td>{{$booking_history->contact}}</td>
                                                    <td>
                                                        <img class="" style="height: 40px" src="{{$booking_history->car->photo->file}}" alt="">
                                                    </td>
                                                    <td>{{$booking_history->car->name}}</td>
                                                    <td>{{$booking_history->days}}</td>
                                                    <td>{{$booking_history->car->rent}}</td>
                                                    <td>
                                                        <span class="badge badge-info">
                                                            Completed
                                                        </span>
                                                    </td>
                                                    <td>{{$booking_history->total}}</td>
                                                    <td>{{$booking_history->created_at->diffForHumans()}}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary">
                                                            <span>
                                                                <i class="fas fa-eye"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                      <canvas id="myChart" width="400" height="173"></canvas>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-1">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4>Settings</h4>
                        <hr>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Account</a>{{-- 
                          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
                        </div>
                        <hr>
                        <div class="tab-content" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <p class="lead text-muted font-weight-bold">Details</p>
                              <form action="{{ route('user.access', $user->id) }}" method="post" class="form-group">
                                @csrf
                                @method('PUT')
                                  <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-user"></i>
                                        </span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name" value="{{$user->name}}" disabled="disabled">
                                    </div>
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="email" value="{{$user->email}}" disabled="disabled">
                                    </div>
                                    <p class="lead text-muted font-weight-bold">Status</p>
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                      </div>
                                        <select name="user_status" class="form-select form-control" aria-label="Default select example">
                                          @if($user->user_status == 0)
                                            <option selected>Restricted</option>
                                          @else
                                          <option selected>Activated</option>
                                          @endif
                                          <option value="0">Restrict</option>
                                          <option value="1">Activate</option>
                                        </select>
                                        <button type="submit" class="btn btn-outline-primary btn-block mt-3">Submit</button>
                                    </div>
                              </form>
                          </div>
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @include('admin.charts.profileChart')
@stop