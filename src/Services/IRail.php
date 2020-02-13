<?php
namespace App\Services;

use Symfony\Component\HttpClient\HttpClient;

class IRail {
    function getInfoGare(){
        $client = HttpClient::create();
        $response = $client->request("GET", 
        "http://api.irail.be:80/liveboard/?id=BE.NMBS.008812005&lang=fr&format=json");

        dump ($response);
        dump ($response->getContent()); // donne le json 
        dump (gettype ($response->getContent()));
        dump (json_decode ($response->getContent()));
        dump (gettype(json_decode ($response->getContent())));
        dump (get_class(json_decode ($response->getContent())));
        die();
    }


}