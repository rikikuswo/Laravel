@extends('template.app')

@section('content')
<div class="container-fluid">
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Data Pegawai</h3>
        </div>
        {{-- card-header --}}
        <div class="card-body">
            <a href="/pegawai/add" class="btn btn-primary mb-2"> + Tambah Pegawai Baru</a><br/>
            <table id="tblpegawai" class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pegawai as $p)
                    <tr>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->jabatan }}</td>
                        <td>{{ $p->umur }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>
                            <a href="/pegawai/edit/{{ $p->id }}">Edit</a>
                            |
                            <a href="/pegawai/hapus/{{ $p->id }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- card-body --}}
        <div class="card-footer">
        </div>
        {{-- card-footer --}}
    </div>
</div>
<script type="text/javascript">
    $(function() {
      $('#tblpegawai').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
@endsection


