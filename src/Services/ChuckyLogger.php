<?php

namespace App\Services;



use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\HttpClient;

class ChuckyLogger
{

    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    public function getPhrase()
    {
        // https://api.chucknorris.io/jokes/random

        $client = HttpClient::create();
        $response = $client->request("GET", "https://api.chucknorris.io/jokes/random");
        $phrase = $response->toArray()['value'];

        $this->logger->info("Appel au Service ChucyLogger ok!");

        return $phrase;
    }
}
