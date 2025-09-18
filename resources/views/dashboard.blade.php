<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard Pengguna</h1>
    <p>Selamat datang, <strong>{{ Auth::user()->name }}</strong>!</p>
    
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>