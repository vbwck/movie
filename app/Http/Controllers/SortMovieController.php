<?php

namespace App\Http\Controllers;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SortMovieController extends BaseController
{
    public function allMovies(){
//        $search = \request()->input('search_id');
//        $data = [];
        $data = DB::select('SELECT * FROM Movies');
        return view('all_movies', ['data' => $data]);
    }

    public function random(){
        $random = DB::table('Movies')->inRandomOrder()->limit(4)->get();
        return view('home',['random' => $random]);
    }

    public function article(Request $request){

        $movieId = $request->input('movie_id');
        $article = DB::select("SELECT * FROM Movies where movie_id = $movieId");
        $movie = Movie::where('movie_id', $movieId)->first();

        $directorId = $movie?->director_id;
        $director = Director::where('director_id',$directorId)->first();
        $directorName = $director->director_name;
        return  view('article',['article' => $article, 'director' => $directorName]);
    }

//    public function getTrailerUrl(){
//        $sql = DB::select("SELECT * FROM Movies where ")
//    }
}
