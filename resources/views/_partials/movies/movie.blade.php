<link rel="stylesheet" href="{{ asset('css/style_article.css') }}">
<h1><?= $movie->movie_title ?></h1>
<h6>Оригинальное название: <?= $movie->original_title ?></h6>
</div>
<div class="content">
    <img src="/{{  $movie->image_path }}" alt="{{ $movie->movie_title }} Image" >
    <div class="content_container">
        <p class="area_info">
            <span>Рейтинг:</span>
            <a href="<?= $movie->link_imdb?>">IMDb</a> <?= $movie->imdb_rate ?>
        </p>
        <p class="area_info">
            <span>Дата выхода:</span>
            <?= $movie->release_year ?>
        </p>
        <p class="area_info">
            <span>Cтрана:</span>
            <?= $movie->country ?>
        </p>
        <p class="area_info">
            <span>Время продолжительности:</span>
            <?= $movie->movie_duration ?>
        </p>
        <p class="area_info">
            <span>Бюджет: </span>
            $<?= $movie->movie_price ?>
        </p>
        <p class="area_info">
            <span>Возраст: </span>
            <?= $movie->movie_alut ?>
        </p>
        <p class="area_info">
            <span>Режиссер: </span>
            <a href="#"><?= $director ?></a>
        </p>
        <h2>Про что фильм «<?= $movie->movie_title ?>»: </h2>
        <p class="last">
            <?= $movie->movie_info ?>
        </p>

    </div>
</div>
