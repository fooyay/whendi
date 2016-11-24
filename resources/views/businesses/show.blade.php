@extends('layouts.master')

@section('content')
    <h1>Business Detail</h1>

    <p><b>Name: </b>{{$business->name}}</p>
    <p><b>Zip Code: </b>{{$business->zip_code}}</p>
    <p><b>Active: </b>{{$business->active}}</p>
@stop
