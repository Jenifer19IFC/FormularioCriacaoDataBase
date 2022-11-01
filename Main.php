<?php

/*require_once('Campo.php');
require_once('Tabela.php');
require_once('DataBase.php');
require_once('Conn.php');
require_once('Executador.php');

    $campo = new Campo();
    $campo->setNome('nome');
    $campo->setTipo('int');
    $campo->setPk(true);
    $campo->setNn(true);
    $campo->setUq(false);
    $campo->setB(false);
    $campo->setUn(false); 
    $campo->setZf(false);    
    $campo->setAi(false);
    $campo->setG(false);           

    $tabela = new Tabela();
    $tabela->setNome("cliente");
    array_push($tabela->listCampos,$campo);
    var_dump($tabela);

    $dataBase = new DataBase();
    $dataBase->setNome("banco");
    $tabela->setDb($dataBase);
    array_push($dataBase->listTabelas,$tabela);
    print_r($dataBase);
    

    echo "<br><br>MINHA CONEXÃO<br>";
    $conn = new Conexao();

    $conn->setUsuario("root");
    $conn->setSenha("");
    $conn->setPorta("3306");
    $conn->setHost("localhost");
    print_r($conn);

    echo "<BR><BR>MEU EXECUTADOR:<BR>";
    $e = new Executador();
    $e->setConn($conn);
    $e->setDb($dataBase);
    $e->setSgbd("mysql");

    var_dump($e);

    //$arquivo = 'executador.json';
    $json = json_encode($dataBase);
    $file = fopen("data.json","a");
    $escreve = fwrite($file, $json);
    fclose($file);

    echo "<br><br>Dados salvos no Json com sucesso!"
*/
?>