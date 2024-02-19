<?php
namespace App\Http\Controllers;
?>
@extends('layout')
@section('title','All movies')

@section('content')
    <head>
        <link rel="stylesheet" href="{{ asset('css/style_all_movies.css') }}">
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

                    </select>
                    <input type="submit" value="Поиск">
                </form>
            </div>
            <div class="movie_container">
                <?php foreach ($data as $movie){?>
                    @include('_partials/random/random',['random'=> $movie])
                <?php } ?>
            </div>
        </div>
@endsection
