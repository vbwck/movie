<?php
namespace App\Http\Controllers;
?>
@extends('layout')


@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/style_article.css') }}">
</head>
    <div class="main">
        <div class="movie-details">
            <div class="header">
                <?php foreach ($article as $movie){?>
                    @include('_partials/movies/movie',['random'=> $movie])
                <?php } ?>
                    <button class="trailer" id="watchButton">Смотреть</button>
                    <div id="modal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
{{--                            <iframe id="trailerFrame" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>--}}
                            <iframe id="trailerFrame" width="960" height="515" src="<?= $movie->trailer_link ?>"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen ></iframe>
                        </div>
                    </div>
                <div></div>
        </div>
    </div>
        <script src="{{ asset('js/modal.js') }}"></script>
@endsection
@section('title',"$movie->movie_title")

