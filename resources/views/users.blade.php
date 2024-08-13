@extends('layouts.layout')

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <table class="table table-bordered table-stripped">
            <tbody>
            @foreach ($data as $id => $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->zipcode}}</td>
                        <td>{{$user->country}}</td>
                        <td>{{$user->status}}</td>
                        <td><a href="{{route('show.singleUser', $user->id)}}" class="btn btn-sm btn-primary">view</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
