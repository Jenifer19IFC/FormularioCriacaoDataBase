<?php

include_once 'Conexao.php';

$titulos = $_POST["nomeTabela"];

$cont_insert = false;

foreach ($titulos as $titulo) {
    $result_tabela = "INSERT INTO tabelas (nomeTabela) VALUES (:nomeTabela)";

    $insert_tabela = $conn->prepare($result_tabela);
    $insert_tabela->bindParam(':nomeTabela', $titulo);
    if ($insert_tabela->execute()) {
        $cont_insert = true;
    } else {
        $cont_insert = false;
    }
}
if ($cont_insert) {
    echo "<p style='color:green;'>Cadastrado com Sucesso</p>";
} else {
    echo "<p style='color:red;'>Erro ao cadastrar</p>";
}