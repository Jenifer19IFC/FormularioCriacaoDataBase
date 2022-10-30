<?php
require_once('Campo.php');
require_once('Tabela.php');
require_once('DataBase.php');
require_once('Conn.php');
require_once('Executador.php');
require_once('Sgbd.php');
// Tabelas e campos no principal
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Tabelas</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
      .form-group{
        padding: 10px;
      }
    </style>
    <meta charset="utf-8">
  </head>
  <body>
  <form action= "Itabela.php" method="GET">

    <fieldset>
        <br><b>TABELA:</b><br><br>
      
        <label for="tab">Nome tabela:</label>
        <input type="text" id="tab" name="tab"><br><br>
        

        <?php

            $tab = isset($_GET['tab']) ? $_GET['tab'] : "";
            //print_r($tabela); 
            $usuario = isset($_GET['usuario']) ? $_GET['usuario'] : "";
            $senha = isset($_GET['senha']) ? $_GET['senha'] : "";
            $host = isset($_GET['host']) ? $_GET['host'] : "";
            $porta = isset($_GET['porta']) ? $_GET['porta'] : "";
            $nome = isset($_GET['nome']) ? $_GET['nome'] : "";
            $nomeSgbd = isset($_GET['nomeSgbd']) ? $_GET['nomeSgbd'] : "";

            echo $usuario . " ". $senha . " ".$host . " ". $porta . " ".$nome . " ". $nomeSgbd . " ";
            


        ?>

<a href="Icampo.php?tab=<?php echo $tab; ?>">Adicionar campos</a>
  </fieldset><br><br>
  <input type="submit" value="Salvar dados"><br><br>
  </fieldset>

  </form>
  </form>
    </form> 
  </body>
</html>