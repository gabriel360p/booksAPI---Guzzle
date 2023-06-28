<?php

use GuzzleHttp\Client;

require __DIR__ . '/vendor/autoload.php';

class Request{
    protected $client;

    function __construct(Client $client)
    {
        $this->client=$client;
    }

    public function store($title,$author){// STORE ----------------------------------------------------------------------------------------------------------
        $response = $this->client->request('POST','http://localhost:8000/books/store', [
            'json' => [
                'title' => $title,
                'author' => $author
            ]
        ]);
    
        echo "Status: " . $response->getStatusCode() . PHP_EOL;
    }


    public function list(){
        $response = $this->client->request('GET', 'http://localhost:8000/books/books');

        $html=json_decode($response->getBody(true)); //pegando o corpo, os dados que vem em array, pra facilitar coloco ele dentro da função json_decode()
        echo "Status: " . $response->getStatusCode() . PHP_EOL;
        print_r($html);
    }



    public function delete($book){//DELETE ----------------------------------------------------------------------------------------------------------
        $response = $this->client->request('DELETE', 'http://localhost:8000/books/book/delete', [
            'json' => [
                'id' => $book
            ]
        ]);
    }


    public function update($book,$title,$author){
        $response = $this->client->request('PUT', 'http://localhost:8000/books/books/update', [
            'json' => [
                'id' => $book,
                'author' => $title,
                'title' => $author
            ]
        ]);
         
        echo "Status: " . $response->getStatusCode() . PHP_EOL;
    }


    public function show($book){
        $response = $this->client->request('GET', 'http://localhost:8000/books/books/show', [
            'json' => [
                'id' => $book
            ]
        ]);
        
        echo "Status: " . $response->getStatusCode() . PHP_EOL;

        print_r(json_decode($response->getBody(true)));
    }

}


$client = new Client();

$request = new Request($client);//inicialiando o objeto
