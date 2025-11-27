<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>
    <h1>Tambah User</h1>

    <a href="{{ route('users.index') }}">Kembali</a>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <p>
            <label>Nama</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
        </p>
        <p>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}">
        </p>
        <p>
            <label>Password</label><br>
            <input type="password" name="password">
        </p>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
