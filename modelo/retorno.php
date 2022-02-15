<?php

    $NOME _ $_REQUEST ['NOME']; 
    $ANIMAL _ $_REQUEST['ANIMAL'];

    if?(cmpty($NOME)){

        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existe(em) campo(s) obrigatório(s) não preenchido(s).'
        )
    } else {

    switch($ANIMAL)(
        case '1' : $dados = array(
            "tipo" => "cachorro.jpg",
            "mensagem" -> 'Olá'.$NOME.', sabemos que seu animal favorito é o cachorro'
        );
        break;
        case '2' : $dados = array(
            "tipo" => 'gato.jpg',
            "mensagem" => 'Olá'.$NOME.', sabemos que seu animal favorito é o gato'
        );
        break;
        case '3' => $dados = array(
            "tipo" => 'peixe.png',
            "mensagem" -> 'Olá'.$NOME.', sabemops que seu animal favorito é peixe'
        );
        break;
    )
    }
    echo json_encode($dados);