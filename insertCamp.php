<?php

include_once 'Conexao.php';

$titulos = $_POST["nomeCamp"];

$cont_insert = false;

foreach ($titulos as $titulo) {
    $result_campo = "INSERT INTO campos (nomeCamp) VALUES (:nomeCamp)";

    $insert_campo = $conn->prepare($result_campo);
    $insert_campo->bindParam(':nomeCamp', $titulo);
    if ($insert_campo->execute()) {
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