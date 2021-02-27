@extends('template.app')

@section('content')
<div class="container-fluid">
    <a href="/pegawai/add" class="btn btn-primary mb-2 mt-2"> + Tambah Pegawai Baru</a><br/>
    <table id="tblpegawai" class="table table-bordered table-hover">
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


