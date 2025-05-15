<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    @if ($errors->any())
        <div>{{ $errors->first() }}</div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
    <a href="{{ route('register') }}">Belum punya akun? Register</a>
</body>

</html>
