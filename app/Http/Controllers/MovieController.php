<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function getPopularMovies() {

        $url = "https://api.themoviedb.org/3/movie/popular?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US&page=1";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getUpcomingMovies() {

        $url = "https://api.themoviedb.org/3/movie/upcoming?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US&page=1";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getTheatresMovies() {

        $url = "https://api.themoviedb.org/3/movie/now_playing?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US&page=1";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getTopMovies() {

        $url = "https://api.themoviedb.org/3/movie/top_rated?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US&page=1";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getMovie($id) {

        $url = "https://api.themoviedb.org/3/movie/" . $id . "?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getMovieCredits($id) {

        $url = "https://api.themoviedb.org/3/movie/" . $id . "/credits?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getMovieVideos($id) {
        $url = "https://api.themoviedb.org/3/movie/" . $id . "/videos?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();
    }

    public function getMovieImages($id) {
        $url = "https://api.themoviedb.org/3/movie/" . $id . "/images?api_key=". env('MOVIE_DATABASE_API_KEY');

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();
    }

    public function search(Request $request) {

        $query = $request->input('query');

        $url = "https://api.themoviedb.org/3/search/multi?query=". $query . "&api_key=". env('MOVIE_DATABASE_API_KEY');

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();


    }

}
