<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Form Tambah Admin</h2>

@if (session('success'))
    <p style= "color: green;">{{ session('success') }}</p>
    @endif

@if ($errors->any())
<ul style="color: red;">
@foreach ($errors ->all() as $error)<li>{{ $error }}</li>
    @endforeach
</ul>
@endif


<form method ="POST" action = "{{ route('admin.store') }}">
      @csrf
        <input type = "text" name = "name" placeholder = "Masukkan nama Anda" value = "{{ old('name') }}"> <br>
        <input type = "email" name = "email" placeholder = "Masukkan Email Anda" value = "{{ old('email') }}"> <br>
        <input type = "no hp" name = "no"  placeholder = "Masukkan no Hp Anda" > <br>
        <input type = "alamat" name = "alamat"  placeholder = "Masukkan Alamat Anda" > <br>
        
        <select><option>Kasir</option><option>Super Admin</option></select>
        <button type = "submit">Simpan</button>
        <a href="/contact/create"><button type="button">Masuk kehalaman contact</button></a>
</form>  
</body>
</html>