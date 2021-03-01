@extends('template.app')
@section('content')
<body>
    <div class="container">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Pegawai</h3>
            </div>
            <!-- /.card-header -->
            <form action="/pegawai/save" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-1">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="nama" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-1">
                                <label for="jabatan">Jabatan</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="jabatan" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-1">
                                <label for="umut">Umur</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="number" name="umur" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-1">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-sm-4">
                                <textarea name="alamat" class="form-control" rows="3" required="required"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="submit" class="btn btn-info" value="Simpan Data">
                    <a href="/pegawai" class="btn btn-default float-right"> Kembali</a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>

    </div>
</body>
@endsection
