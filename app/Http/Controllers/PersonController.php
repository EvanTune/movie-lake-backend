<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function getPopularPeople() {

        $url = "https://api.themoviedb.org/3/person/popular?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US&page=1";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getPerson($id) {

        $url = "https://api.themoviedb.org/3/person/" . $id . "?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getPersonMovieCredits($id) {

        $url = "https://api.themoviedb.org/3/person/" . $id . "/movie_credits?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();


    }
    public function getPersonTvCredits($id) {

        $url = "https://api.themoviedb.org/3/person/" . $id . "/tv_credits?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }
    public function getPersonCombinedCredits($id) {

        $url = "https://api.themoviedb.org/3/person/" . $id . "/combined_credits?api_key=". env('MOVIE_DATABASE_API_KEY') ."&language=en-US";

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getPersonImages($id) {

        $url = "https://api.themoviedb.org/3/person/" . $id . "/images?api_key=". env('MOVIE_DATABASE_API_KEY');

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();

    }

    public function getPersonSearch(Request $request) {
        $query = $request->input('query');
        $page = $request->input('page');

        $url = "https://api.themoviedb.org/3/search/person?" . "api_key=" . env('MOVIE_DATABASE_API_KEY') . "&language=en-US"  . "&vote_count.gte=50" . "&page=" . $page . "&query=" . $query;

        $client = new Client();
        $response = $client->request('GET', $url);

        return $response->getBody();
    }
}
