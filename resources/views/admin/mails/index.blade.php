@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>All Mails</h1>
@stop

@section('content')
    <p>Manage all mails form users from this panel.</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow shadow-regular">
                    <div class="card-body">
                        <h3 class="text-center">All Mails</h3>

                        <div class="table-responsive table-striped">
                            <table class="table">
                                <thead>
                                    <th>#</th>
                                    <th>status</th>
                                    <th>username</th>
                                    <th>mail</th>
                                    <th>recived</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($mails as $mail)
                                    <tr>
                                        <td>{{$mail->id}}</td>
                                        <td class="mt-2"><span class="badge badge-success badge-sm">unread</span></td>
                                        <td class="font-weight-bold">{{$mail->firstName}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($mail->message, 80)}}</td>
                                        <td>{{$mail->created_at->diffForHumans()}}</td>
                                        <td>
                                            <button class="btn btn-outline-primary btn-sm rounded-circle">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <form action="{{ route('mails.destroy', $mail->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm rounded-circle">
                                                    <i class="fas fa-trash"></i>
                                                </button>
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