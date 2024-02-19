<link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
<div class="movie-card">
    <form action="{{ route('article') }}" method="post">
        @csrf
        <img src="/{{  $movie->image_path }}" alt="{{ $movie->movie_title }} Image">
        <h3><?= $movie->movie_title ?></h3>
        <p><?= $movie->movie_info ?></p>
        <input type="hidden" name="movie_id" value="{{ $movie->movie_id }}">
        <button class="btn" type="submit">Подробнее</button>
    </form>
</div>
