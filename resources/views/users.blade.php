@extends('layouts.layout')

@section('main-content')

<div class="row">
    @if (isset($_GET['message']))
        <div class="col-12">
            <div class="alert alert-secondary">
                {{$_GET['message']}}
            </div>
        </div>
    @endif
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="bootstrap-data-table-export"  class="table table-bordered table-stripped scroll-overflow-x">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>UserName</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>City</td>
                            <td>ZipCode</td>
                            <td>Country</td>
                            <td>Status</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $id => $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->city}}</td>
                                <td>{{$user->zipcode}}</td>
                                <td>{{$user->country}}</td>
                                <td>
                                    @if ($user->status == '1')
                                        {{'Active'}}
                                    @else
                                        {{'In-active'}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('show.User', $user->id)}}" class="btn btn-sm btn-primary">view</a>
                                    <a href="{{route('update.User', $user->id)}}"
                                        class="btn btn-sm btn-secondary">update</a>
                                    <a href="{{route('delete.User', $user->id)}}" class="btn btn-sm btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
