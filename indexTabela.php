<?php
//require_once('indexCampo.php');
?>

<!DOCTYPE HTML>
<html lang="pt-br">  
    <head>  
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .form-group{
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <h1>Adicionar Tabela</h1>
        <span id="msg"></span>
        <form id="add-tabela" method="POST">
            <div id="formulario">
                <div class="form-group">
                    <label>Tabela: </label>
                    <input type="text" name="nomeTabela[]" placeholder="Digite o nome da tabela">
                    <button type="button" id="add-campo"> ✖️​ </button>
                </div>
            </div>
            <!--<div class="form-group">
                <input type="button" name="CadTabelas" id="CadTabelas" value="Cadastrar">
            </div>-->
        </form>

        <script>
           //$(document).ready(function () {
                var cont = 1;
                //https://api.jquery.com/click/
                $('#add-campo').click(function () {
                    cont++;
                    //https://api.jquery.com/append/
                    $('#formulario').append('<div class="form-group" id="campo' + cont + '"> <label>Tabela: </label><input type="text" name="nomeTabela[]" placeholder="Digite o nome da tabela"> <button type="button" id="' + cont + '" class="btn-apagar"> ❌​ </button></div>');
                });

                $('form').on('click', '.btn-apagar', function () {
                    var button_id = $(this).attr("id");
                    $('#campo' + button_id + '').remove();
                });

                /*$("#CadTabelas").click(function () {
                    //Receber os dados do formulário
                    var dados = $("#add-tabela").serialize();
                    $.post("insert.php", dados, function (retorna) {
                        $("#msg").slideDown('slow').html(retorna);

                        //Limpar os campos
                        //$('#add-aula')[0].reset();

                        //Apresentar a mensagem leve
                        retirarMsg();
                    });
                });*/

                //Retirar a mensagem após 1700 milissegundos
                function retirarMsg() {
                    setTimeout(function () {
                        $("#msg").slideUp('slow', function () {});
                    }, 2700);
                }
            //});
        </script>

<br>
<a href="indexCampo.php">Adicionar campos</a>


    </body>
</html>