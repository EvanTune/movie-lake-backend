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
}
