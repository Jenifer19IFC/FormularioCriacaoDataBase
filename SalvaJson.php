<?php
session_start();
require_once('Tabela.php');
require_once('Executador.php');
require_once('Sgbd.php');
require_once('Conn.php');
require_once('DataBase.php');
require_once('Campo.php');

$executadorObject = unserialize($_SESSION['executadorObject']);

$arquivo = __DIR__ . '/arquivo.json';
file_put_contents($arquivo, json_encode($executadorObject));

?>