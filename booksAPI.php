<?php

//Funciona

require __DIR__ . '/guzzle_request.php';


//Caminho (1) - Armazenar - (2) Listar tudo do banco - (3) Deletar do Banco - (4) Atualizar - (5) Mostrar um item do banco
$path= $argv[1];

switch($path){
    case 1://salvando no banco de dados

        $title= $argv[2];

        $author= $argv[3];

        $request->store($title,$author);

    break;

    case 2://listando todos os itens do banco

        $request->list();

    break;

    case 3://listando todos os itens do banco

        $book= $argv[2];//pegando o id do livro

        $request->delete($book);

    break;

    case 4://atualizando o livro

        $book= $argv[2];//pegando o id do livro

        $title= $argv[3];//pegando o novo titulo

        $author= $argv[4];//pegando o novo autor

        $request->update($book,$title,$author);

    break;

    case 5://listando todos os itens do banco

        $book= $argv[2];//pegando o id do livro

        $request->show($book);

    break;

}













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

