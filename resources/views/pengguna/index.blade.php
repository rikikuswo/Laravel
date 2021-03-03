@extends('template.app')
@section('content')
    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>No Telp</th>
            <th>Provinsi</th>
        </tr>
        @foreach ($data as $key)
        <tr>
            <td>{{ $key['name'] }}</td>
            <td>{{ $key['address'] }}</td>
            <td>{{ $key['region'] }}</td>
            <td>{{ $key['phone'] }}</td>
            <td>{{ $key['province'] }}</td>
        </tr>
        @endforeach
</table>
@endsection
