<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TvController extends Controller
{
    public function getPopularTv() {

        $url = "https://api.themoviedb.org/3/tv/popular?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US&page=1";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getUpcomingTv() {

        $url = "https://api.themoviedb.org/3/tv/upcoming?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US&page=1";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getTheatresTv() {

        $url = "https://api.themoviedb.org/3/tv/playing_now?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US&page=1";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getTv($id) {

        $url = "https://api.themoviedb.org/3/tv/" . $id . "?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getTvCredits($id) {

        $url = "https://api.themoviedb.org/3/tv/" . $id . "/credits?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }
}
