@extends('template.app')
@section('content')
    @foreach ($data as $key)
        {{ $key['name'] }}
    @endforeach
@endsection
