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
        {{-- UBAH BAGIAN INI --}}
        <a href="{{ route('dashboard') }}">Login via SSO Kampus</a>
    @endauth
</body>
</html>