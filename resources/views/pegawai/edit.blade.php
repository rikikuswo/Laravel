<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
    @foreach ($pegawai as $p)
    <form action="/pegawai/saveUpdate" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id }}">
		Nama <input type="text" name="nama" value="{{ $p->nama }}" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" value="{{ $p->jabatan }}" required="required"> <br/>
		Umur <input type="number" name="umur" value="{{ $p->umur }}" required="required"> <br/>
		Alamat <textarea name="alamat" required="required">{{ $p->alamat }}</textarea> <br/>
		<input type="submit" value="Update Data">
	</form>
    @endforeach
</body>
</html>
