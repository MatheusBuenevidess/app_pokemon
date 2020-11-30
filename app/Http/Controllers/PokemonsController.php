<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PokemonsController extends Controller
{
    public function buscar(){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://pokeapi.co/api/v2/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);


        $response = $client->request('GET', 'pokemon/ditto');

        echo "<pre>";
        print_r($response->getBody());
    }
}
