<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function getPopularMovies()
    {

        $url = "https://api.themoviedb.org/3/movie/popular?api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US&page=1";

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getUpcomingMovies()
    {

        $url = "https://api.themoviedb.org/3/movie/upcoming?api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US&page=1";

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getTheatresMovies()
    {

        $url = "https://api.themoviedb.org/3/movie/now_playing?api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US&page=1";

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getTopMovies()
    {

        $url = "https://api.themoviedb.org/3/movie/top_rated?api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US&page=1";

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getMovie($id)
    {

        $url = "https://api.themoviedb.org/3/movie/" . $id . "?api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US";

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getMovieCredits($id)
    {

        $url = "https://api.themoviedb.org/3/movie/" . $id . "/credits?api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US";

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getMovieVideos($id)
    {
        $url = "https://api.themoviedb.org/3/movie/" . $id . "/videos?api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US";

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();
    }

    public function getMovieImages($id)
    {
        $url = "https://api.themoviedb.org/3/movie/" . $id . "/images?api_key=" . env('MOVIE_DATABASE_API_KEY');

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();
    }

    public function search(Request $request)
    {

        $query = $request->input('query');

        $url = "https://api.themoviedb.org/3/search/multi?query=" . $query . "&api_key=" . env('MOVIE_DATABASE_API_KEY');

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getMovieDiscover(Request $request)
    {

        $sort = $request->input('sort');
        $year = $request->input('year');
        $genres = $request->input('genres');
        $page = $request->input('page');
        $date_greater_than = $request->input('date_greater_than');
        $date_less_than = $request->input('date_less_than');


        if ($date_greater_than && $date_less_than) {
            $url = "https://api.themoviedb.org/3/discover/movie?" . "api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US" . "&sort_by=popularity.desc" . "&with_genres=" . $genres . "&page=" . $page . "&release_date.gte=" . $date_greater_than . "&release_date.lte=" . $date_less_than . "&with_release_type=2|3";
        } else {
            $url = "https://api.themoviedb.org/3/discover/movie?" . "api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US" . "&sort_by=" . $sort . "&with_genres=" . $genres . "&page=" . $page . "&primary_release_year=" . $year . "&vote_count.gte=75";
        }

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getMovieSearch(Request $request) {
        $query = $request->input('query');
        $page = $request->input('page');

        $url = "https://api.themoviedb.org/3/search/movie?" . "api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US"  . "&vote_count.gte=50" . "&page=" . $page . "&query=" . $query;

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();
    }

    public function getMultiSearch(Request $request) {
        $query = $request->input('query');
        $page = $request->input('page');

        $url = "https://api.themoviedb.org/3/search/multi?" . "api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US"  . "&vote_count.gte=50" . "&page=" . $page . "&query=" . $query;

        $client = new Client(['http_errors' => false]);
        $response = $client->request('GET', $url);

        return $response->getBody();
    }

}
