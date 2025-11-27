<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>Daftar User</h1>

    <a href="{{ route('users.create') }}">+ Tambah User</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    |
                    <a href="{{ route('users.destroy', $user->id) }}"
                       onclick="return confirm('Yakin hapus?')">
                        Hapus
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Belum ada data.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>
