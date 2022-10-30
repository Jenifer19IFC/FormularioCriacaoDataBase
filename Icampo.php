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
    <title>Campos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta charset="utf-8">
  </head>
  <body>

  <form>
    <fieldset>
            <BR><BR>
            <div id="formularioC">
                <div class="form-groupC">
                    <label>Nome do campo: </label>
                    <input type="text" name="nomeCampo[]" placeholder="Digite o nome do campo"><br>
                    <label>Tipo: </label>
                    <select name="tipos">
                        <option value=""></option>
                        <option value="1">int</option>
                        <option value="2">varchar(45)</option>
                        <option value="3">double</option>
                    </select>
                    <br><br><input type="checkbox" name="op1" value="pk"> Primary Key
                    <br><input type="checkbox" name="op2" value="nn"> Não nulo
                        <br><input type="checkbox" name="op3" value="uq"> Único
                        <br><input type="checkbox" name="op4" value="b"> Binário
                        <br><input type="checkbox" name="op5" value="un"> Não assinado
                        <br><input type="checkbox" name="op6" value="zf"> Valor 0 se for númerico
                        <br><input type="checkbox" name="op7" value="ai"> Incremento automático
                        <br><input type="checkbox" name="op8" value="g"> Coluna gerada

                    
                </div>
            </div>
            <div class="form-groupC">
            <br><br><input type="submit" value="Salvar"><br><br>
            </div>
            </fieldset>
        </form>

        <?php
        
            $nomeTabela = isset($_GET['tab']) ? $_GET['tab'] : "";
            echo $nomeTabela;

            print_r($dataBase);
            
        ?>

        

  </fieldset>
  </body>
</html>