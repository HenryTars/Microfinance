@extends('layouts.app')

@section('content')
<h1 style="text-align: center;">KARIBU <strong>KUWA Microfinace Company Limited</strong></h1>
@if(count($clients) > 0)
<h3>LIST OF CLIENTS</h3>
    @foreach($clients as $client)
    <div class="container-fluid">
    <ul class="list-group justify-content-center">
            <li class="list-group-item">First name :{{$client->firstname}}</li>
            <li class="list-group-item">Middle name :{{$client->middlename}}</li>
            <li class="list-group-item">Last name :{{$client->lastname}}</li>
            <li class="list-group-item">Address :{{$client->address}}</li>
        </ul>
    </div>
    <br>
    @endforeach
@endif
@endsection