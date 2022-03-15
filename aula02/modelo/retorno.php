<?php

    $NOME = $_REQUEST['NOME'];
    $IDADE = $_REQUEST['IDADE'];
    $BEBIDA =  $_REQUEST['BEBIDA'];
    $ATUAl = 2022;
    $CALCULO = $ATUAl - date('Y', strtotime($IDADE));


    if(empty($NOME)){
        
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existem(m) campo(s) obrigatório(s) não preenchido(s).'
        );
    }else{
       if ($CALCULO >=18 && $BEBIDA == 'vodik'){
           $dados = array(
               "tipo" => 'erro',
               "mensagem" => 'Pode beber bebida alcolica'
           );
       }else{
        $dados = array (
            "tipo" => 'erro',
            "mensagem" => 'Nao pode beber bebida alcolica'
        );
       }
       if ($BEBIDA == 'suco' || $BEBIDA == 'refrigerante'){
           $dados = array(
               "tipo" => 'erro',
               "mensagem" => 'Pode beber sendo de menor'
           );
       }

    }
    

    echo json_encode($dados);