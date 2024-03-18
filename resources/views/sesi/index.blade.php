@extends('layout/aplikasi')

@section('konten')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <title>Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Create Account</h1>
                <p></p>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>Daftar</button>
                <div class="social-icons">
                    <a href="http://www.youtube.com/@coolgates3002" class="icon"><i class="fa-brands fa-google-plus-g"></i></a> 
                </div>
               

            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST">
                @csrf
                <h1>Masuk</h1>
               <br>
                <p></p>
                <input type="email" placeholder="E-mail">
                <input type="password" placeholder="Password">
                <a href="#">Belum punya akun ? Daftar</a>
                <button>Masuk</button>
                <div class="social-icons">
                    <a href="http://www.youtube.com/@coolgates3002" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                   </div>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Selamat Datang Kembali!</h1>
                    <p>Masukkan akun untuk menggunakan seluruh fitur website</p>
                    <button class="hidden" id="login">Masuk</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello Brother fitnes!</h1>
                    <p>kalau belum punya akun daftar aja dulu</p>
                    
                    <button class="hidden" id="register">daftar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>

@endsection