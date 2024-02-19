<?php
namespace App\Http\Controllers;
?>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/Montserrat-Regular.ttf') }}">
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/search">All movies</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Cabinet</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="search">
                <form action="{{ url('/search') }}" method="POST" class="form_search">
                    @csrf
                    <label for="search_id">
                        Поиск фильмов по:
                    </label>
                    <select name="search_id" id="search_id">
                        <option value="1">Дате добавления</option>
                        <option value="2">Режисеру</option>
                        <option value="3">За алфавитом</option>
                    </select>
                    <input type="submit" value="Поиск">
                </form>
            </div>
{{--            <div class="movie_container">--}}
{{--                <?php foreach ($data as $movie){?>--}}
{{--                    <div class="movie_view">--}}
{{--                        <p><h2><?= $movie->movie_title ?></h2></p>--}}
{{--                        <img class="size_image" src="/{{  $movie->image_path }}" alt="{{ $movie->movie_title }} Image">--}}
{{--                        <p class="info">Описание: <?= $movie->movie_info ?></p>--}}
{{--                        <p class="duration">Время продолжительности: <?= $movie->movie_duration ?>.</p>--}}
{{--                        <p class="price">Бюджет: $<?= $movie->movie_price ?></p>--}}
{{--                        <p class="alut">Возраст : <?= $movie->movie_alut ?>+</p>--}}
{{--                        <p class="year">Дата выпуска: <?= $movie->release_year ?></p>--}}
{{--                    </div>--}}
{{--                <?php } ?>--}}
{{--            </div>--}}
            <div class="home_page_container">
                <p> Hello, im created this web-site to adding some movies and serials after im watched that.
                    It's kind of a library to myself and my friend to find something at this evening to watch.</p>
                <p>Well, you can go to link at head of site "All movies" to find some movie or just using using search under
                    the navigation of site.</p>
                <p>That will be some categories to go quickly and looks something.</p>
            </div>
        </div>
    </body>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>Мы страстные ценители кино и предоставляем информацию о различных фильмах.</p>
            </div>

            <div class="footer-section links">
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
