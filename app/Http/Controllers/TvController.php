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

    public function getTvVideos($id) {
        $url = "https://api.themoviedb.org/3/tv/" . $id . "/videos?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();
    }

    public function getTvImages($id) {
        $url = "https://api.themoviedb.org/3/tv/" . $id . "/images?api_key=". env('MOVIE_DATABASE_API_KEY');

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();
    }

    public function getTvSeason($id, $id2) {
        $url = "https://api.themoviedb.org/3/tv/" . $id . "/season/" . $id2 . "?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();
    }

    public function getTvEpisode($id, $id2, $id3) {
        $url = "https://api.themoviedb.org/3/tv/" . $id . "/season/" . $id2 . "/episode/" . $id3 . "?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();
    }
}
