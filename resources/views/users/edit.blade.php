<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

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

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        <p>
            <label>Nama</label><br>
            <input type="text" name="name" value="{{ old('name', $user->name) }}">
        </p>
        <p>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email', $user->email) }}">
        </p>
        <p>
            <label>Password (isi jika ingin ganti)</label><br>
            <input type="password" name="password">
        </p>
        <button type="submit">Update</button>
    </form>
</body>
</html>
