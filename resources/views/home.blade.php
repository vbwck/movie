<?php
namespace App\Http\Controllers;
?>
@extends('layout')
@section('title','Home')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
</head>
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

        <section class="hero-section">
            <div class="hero-content">
                <h1>Добро пожаловать на наш сайт с фильмами!</h1>
                <p>Откройте для себя увлекательный мир кино и наслаждайтесь своими любимыми фильмами.</p>
                <a href="/search" class="btn">Посмотреть фильмы</a>
            </div>
        </section>
        <h2 class="h2">Рекомендованные фильмы</h2>
        <section class="featured-movies">
        <?php foreach ($random as $movie){?>
        @include('_partials/random/random',['random'=> $movie])
        <?php } ?>
        </section>
    </div>
@endsection

