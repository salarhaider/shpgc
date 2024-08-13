<h1>Single User</h1>

@foreach ($data as $user)
    <h3>{{$user->id}}</h3>
    <h3>{{$user->name}}</h3>
    <h3>{{$user->username}}</h3>
    <h3>{{$user->email}}</h3>
    <h3>{{$user->phone}}</h3>
    <h3>{{$user->address}}</h3>
    <h3>{{$user->city}}</h3>
    <h3>{{$user->zipcode}}</h3>
    <h3>{{$user->country}}</h3>
    @if ($user->status == '1')
        <h3>{{'Active'}}</h3>
    @else
        <h3>{{'In-active'}}</h3>

    @endif
@endforeach
