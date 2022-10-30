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
    <title>Form obtém  dados</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
      .form-group{
        padding: 10px;
      }
    </style>
    <meta charset="utf-8">
  </head>
  <body>
  <form action= "" method="GET">

    <fieldset>
        <br><b>CONEXAO:</b><br><br>
        <!--<label for="nome">Nome DataBase:</label>
        <input type="text" id="nome" name="nome"><br><br>-->
      
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario"><br><br>
        <label for="senha">Senha:</label>
        <input type="text" id="senha" name="senha"><br><br>
        <label for="host">Host:</label>
        <input type="text" id="host" name="host"><br><br>
        <label for="porta">Porta:</label>
        <input type="text" id="porta" name="porta"><br><br>

        <?php

            $nome = isset($_GET['nome']) ? $_GET['nome'] : "";
            $host = isset($_GET['host']) ? $_GET['host'] : "";
            $porta = isset($_GET['porta']) ? $_GET['porta'] : "";
            $usuario = isset($_GET['usuario']) ? $_GET['usuario'] : "";
            $senha = isset($_GET['senha']) ? $_GET['senha'] : "";
          
            /*echo "<br><br><b>Dados coletados do formulário</b>";
            echo "<br><br><b>Host:</b>".$host.'<br>';
            echo "<br><b>Porta:</b> ".$porta.'<br>';
            echo "<br><b>Usuário:</b> ".$usuario.'<br>';
            echo "<br><b>Senha:</b> ".$senha.'<br>';
            echo "<br><b>SGBD:</b> ".$sgbd.'<br>';*/

            $conn = new Conexao();
            $conn->setUsuario($usuario);
            $conn->setSenha($senha);
            $conn->setHost($host);
            $conn->setPorta($porta);
            //print_r($conn);
            //echo "<br><br>";
        ?>

  <form action="" method="GET">
      <fieldset>
        <br><b>DATABASE:</b><br><br>
        <label for="nome">Nome DataBase:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <?php

            $nome = isset($_GET['nome']) ? $_GET['nome'] : "";
           
            $dataBase = new DataBase();
            $dataBase->setNome($nome);
            //print_r($dataBase);
            echo "<br>";

           
        ?>
    
   
    
<br><br>

  <form action= "" method="GET">
  <fieldset>
        <br><b>EXECUTADOR:</b><br><br>
        <label for="nomeSgbd">Nome SGBD:</label>
        <input type="text" id="nomeSgbd" name="nomeSgbd" value="mysql" readonly><br><br>
        <?php

            $nomeSgbd = isset($_GET['nomeSgbd']) ? $_GET['nomeSgbd'] : "";
            
            $sgbd = new Sgbd();

            $nomeSgbd = $_GET['nomeSgbd'];
            $sgbd->setNome($nomeSgbd);
            echo "<br><br>";
            $e = new Executador();
            $e->setConn($conn);
            $e->setDb($dataBase);
            $e->setSgbd($sgbd);
            print_r($e);
            echo "<br><br>";

            //Apenas escreve o Executador em formato Json na tela
            echo json_encode($e);
            
            //Salva Executador em um arquivo Json
            $arquivo = __DIR__ . '/arquivo.json';
            file_put_contents($arquivo, json_encode($e));

        ?>
        <br><br>
  <a href="Itabela.php?usuario=<?php echo $usuario; ?>&senha=<?php echo $senha; ?> &host=<?php echo $host; ?>&porta=<?php echo $porta; ?>&porta=<?php echo $porta; ?>&nome=<?php echo $nome; ?>&nomeSgbd=<?php echo $nomeSgbd; ?>"> Adicionar tabelas</a>
  
  </fieldset>
  </fieldset><br><br>
  <input type="submit" value="Salvar dados"><br><br>
  </fieldset>

  </form>
  </form>
    </form> 
  </body>
</html>