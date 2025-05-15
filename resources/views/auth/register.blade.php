<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>Form Register</h1>

    {{-- Tampilkan pesan sukses --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tampilkan pesan error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Registrasi --}}
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>

        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>

        <select name="role" required>
            <option value="">Pilih Role</option>
            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="guru" {{ old('role') == 'guru' ? 'selected' : '' }}>Guru</option>
            <option value="murid" {{ old('role') == 'murid' ? 'selected' : '' }}>Murid</option>
        </select>

        <button type="submit">Daftar</button>
    </form>
</body>

</html>
