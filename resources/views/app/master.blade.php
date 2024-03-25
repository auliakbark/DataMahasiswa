<!DOCTYPE html>
<html>
<head>
    <title>Sistem Template Blade Laravel</title>
</head>
<body>
 
    <header>
        <h2>Web Laravel</h2>
        <nav>
            <a href="/blog">HOME</a> | <a href="/kontak">Kontak</a> |
        </nav>
    </header>
    <hr/>
    <br/>
    <br/>
 
    <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman') </h3>
 
 
    <!-- bagian konten blog -->
    @yield('konten')
 
 
    <br/>
    <br/>
    <hr/>
    <footer>
        <p>footer kita</p>
    </footer>
 
</body>
</html>