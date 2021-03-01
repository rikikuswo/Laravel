@extends('template.app')
@section('content')
    {{ Session::get('name') }}
    {{ Session::get('email') }}
@endsection
