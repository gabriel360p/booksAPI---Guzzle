<?php

//Funciona

use GuzzleHttp\Client;

require __DIR__ . '/vendor/autoload.php';

$client = new Client();

// STORE ----------------------------------------------------------------------------------------------------------
//aparentemente funciona - adicionando no banco de dados
// $response = $client->request('POST', 'http://localhost:8000/books/store', [
//     'json' => [
//         'title' => 'A menina e o porco',
//         'author' => 'Jason Bores'
//     ]
// ]);

// echo "Status: " . $response->getStatusCode() . PHP_EOL;


// LIST ----------------------------------------------------------------------------------------------------------
//aparentemente funciona - listando todos os livros do banco
// $response = $client->request('GET', 'http://localhost:8000/books/books');

// $html=json_decode($response->getBody(true)); //pegando o corpo, os dados que vem em array, pra facilitar coloco ele dentro da função json_decode()
// echo "Status: " . $response->getStatusCode() . PHP_EOL;
// var_dump($html);


//DELETE ----------------------------------------------------------------------------------------------------------
// // //aparentemente funciona - deletendo algo do banco
// $response = $client->request('DELETE', 'http://localhost:8000/books/book/delete', [
//     'json' => [
//         'id' => 5
//     ]
// ]);
 

// UPDATE ----------------------------------------------------------------------------------------------------------
// $response = $client->request('PUT', 'http://localhost:8000/books/books/update', [
//     'json' => [
//         'id' => 9,
//         'author' => "MARVEL",
//         'title' => "Homem aranha no aranhaverso"
//     ]
// ]);
 
// echo "Status: " . $response->getStatusCode() . PHP_EOL;


// SHOW ----------------------------------------------------------------------------------------------------------
// $response = $client->request('GET', 'http://localhost:8000/books/books/show', [
//     'json' => [
//         'id' => 1
//     ]
// ]);
 
// echo "Status: " . $response->getStatusCode() . PHP_EOL;

// var_dump(json_decode($response->getBody(true)));

