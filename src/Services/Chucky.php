<?php
namespace App\Services;



use Symfony\Component\HttpClient\HttpClient;

class Chucky {


    public function getPhrase(){
        // https://api.chucknorris.io/jokes/random

        $client = HttpClient::create();
        $response = $client->request("GET", "https://api.chucknorris.io/jokes/random");
        $phrase = $response->toArray()['value'];
        return $phrase;
     
    }

}
