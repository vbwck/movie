<?php
namespace App\Http\Controllers;
?>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/Montserrat-Regular.ttf') }}">
        <link rel="shortcut icon" type="image/png" href="storage/icons/icons8-movie-96.png"/>
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/search">All movies</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="#">Cabinet</a></li>
            </ul>
        </div>
{{--        <div class="main">--}}
@yield('content')
    </body>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>Мы страстные ценители кино и предоставляем информацию о различных фильмах.</p>
            </div>

            <div class="footer-section">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#"><img class="icons_footer" src="storage/icons/Instagram_icon.png" alt="instagram"></a></li>
                    <li><a href="#"><img class="icons_footer" src="storage/icons/facebook.png" alt="facebook"></a></li>
                    <li><a href="#"><img class="icons_footer" src="storage/icons/telegram.png" alt="telegram"></a></li>
                    <li><a href="#"><img class="icons_footer" src="storage/icons/icq.png" alt=""></a></li>
                </ul>
            </div>

            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <p>Email: bb1neogame@gmail.com</p>
                <p>Phone: +3 (073) 0888-021</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 vb movie. All Rights Reserved.</p>
        </div>
    </div>
</html>
