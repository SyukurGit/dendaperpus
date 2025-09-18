<!DOCTYPE html>
<html>
<head>
    <title>Sistem Denda</title>
</head>
<body>
    <h1>Sistem Denda Perpustakaan</h1>
    @auth
        <p>Halo, {{ Auth::user()->name }}. Anda sudah login.</p>
        <a href="{{ route('dashboard') }}">Ke Dashboard</a>
    @else
        <p>Silakan login untuk melanjutkan.</p>
        <a href="{{ route('login') }}">Login via SSO Kampus</a>
    @endauth
</body>
</html>