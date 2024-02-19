<?php
namespace App\Http\Controllers;
?>
@extends('layout')
@section('title','home page')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/style_faq.css') }}">
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
    <div class="home_page_container">
        <p> Hello, im created this web-site to adding some movies and serials after im watched that.
            It's kind of a library to myself and my friend to find something at this evening to watch.</p>
        <p>Well, you can go to link at head of site "All movies" to find some movie or just using using search under
            the navigation of site.</p>
        <p>That will be some categories to go quickly and looks something.</p>
    </div>
</div>
@endsection

