@extends('template.app')
@section('content')
<body>
<div class="container">
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Edit Data Pegawai</h3>
        </div>
        @foreach ($pegawai as $p)
            <form action="/pegawai/saveUpdate" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <input type="hidden" name="id" value="{{ $p->id }}">
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-sm-1">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="nama" value="{{ $p->nama }}" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-1">
                                <label for="jabatan">Jabatan</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="jabatan" value="{{ $p->jabatan }}" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-1">
                                <label for="umur">Umur</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="number" name="umur" value="{{ $p->umur }}" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-1">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-sm-4">
                                <textarea name="alamat" class="form-control" rows="3">{{ $p->alamat }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Update Data" class="btn btn-info">
                    <a href="/pegawai" class="btn btn-default float-right   "> Kembali</a>
                </div>
            </form>
            @endforeach
    </div>
</div>
</body>
@endsection
