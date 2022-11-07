<?php
require_once('Campo.php');
require_once('Tabela.php');
require_once('DataBase.php');
require_once('Conn.php');
require_once('Executador.php');
require_once('Sgbd.php');

session_start();

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$host = $_SESSION['host'];
$porta = $_SESSION['porta'];
$nomeDb = $_SESSION['nomeDb'];
$nomeSgbd = $_SESSION['nomeSgbd'];

print($usuario);
echo "<br>";
print($senha);
echo "<br>";
print($host);
echo "<br>";
print($porta);
echo "<br>";
print($nomeDb);
echo "<br>";
print($nomeSgbd);

$contTab = 0;

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


           //if (empty($_SESSION['tab'])) {
            //    $_SESSION['tab'] = [];
            //}

          
              
          $tabela = new Tabela();
          $tabela->setNome($tab);

          $tabelaSerializada = serialize($tabela);
          
          $_SESSION['tabela'] = $tabelaSerializada;
          var_dump($tabela);
          echo "<br>";
          var_dump($tabelaSerializada);

         

            
            //var_dump($tabela);
            //array_push($_SESSION['tab'],$_GET['tab']);
            //Array push depois dos campos

           echo "<br><br>";
            
            //for($i = 0 ; $i < count($_SESSION['tab']) ; $i++) {
            //     print_r($_SESSION['tab'][$i]);
            //} 
    
        ?>

  <a href="indexCampo.php">Adicionar campos</a>
  </fieldset><br><br>
  <input type="submit" id = "sub" value="Salvar dados"><br><br>

  <a href="Itabela.php"> Adicionar mais tabelas</a>

  </fieldset>

  <script>
    contTab = 0;

      $('#sub').click(function () {
          contTab++; 
      });

      console.log($contTab);

  </script>
  </form>
  </form>
    </form> 
  </body>
</html>