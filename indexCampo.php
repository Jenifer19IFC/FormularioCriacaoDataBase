<!DOCTYPE HTML>
<html lang="pt-br">  
    <head>  
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .form-groupC{
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <h1>Adicionar Campo </h1> <a href="indexTabela.php">Voltar para tabelas</a><br><br>
        <a href="FormDataBase.php">Voltar ao início</a>
    <br>

        <form>
            <BR><BR>
            <div id="formularioC">
                <div class="form-groupC">
                <button type="button" id="add-campo"> ✖️ CAMPO</button><br><br>
                    <label>Nome do campo: </label>
                    <input type="text" name="nomeCampo[]" placeholder="Digite o nome do campo"><br>
                    <label>Tipo: </label>
                    <select name="tipos">
                        <option value=""></option>
                        <option value="1">int</option>
                        <option value="2">varchar(45)</option>
                        <option value="3">double</option>
                    </select>
                    <br><br><input type="checkbox" name="opcao" value="pk"> Primary Key
                    <br><input type="checkbox" name="opcao" value="nn"> Não nulo
                        <br><input type="checkbox" name="opcao" value="uq"> Único
                        <br><input type="checkbox" name="opcao" value="b"> Binário
                        <br><input type="checkbox" name="opcao" value="un"> Não assinado
                        <br><input type="checkbox" name="opcao" value="zf"> Valor 0 se for númerico
                        <br><input type="checkbox" name="opcao" value="ai"> Incremento automático
                        <br><input type="checkbox" name="opcao" value="g"> Coluna gerada
                    
                </div>
            </div>
            <div class="form-groupC">
                    <br><input type="button" value="Cadastrar">
            </div>
        </form>

        <script>
            var cont = 1;
            //https://api.jquery.com/click/
                $('#add-campo').click(function () {
                    cont++;

                    //https://api.jquery.com/append/
                    $('#formularioC').append('<div class="form-groupC"><br><br><label>Nome do campo: </label><input type="text" name="nomeCampo[]" placeholder="Digite o nome do campo"><br><label>Tipo: </label><select name="tipos"><option value=""></option><option value="1">int</option><option value="2">varchar(45)</option><option value="3">double</option></select><br><br><input type="checkbox" name="opcao" value="pk"> Primary Key<br><input type="checkbox" name="opcao" value="nn"> Não nulo<br><input type="checkbox" name="opcao" value="uq"> Único<br><input type="checkbox" name="opcao" value="b"> Binário<br><input type="checkbox" name="opcao" value="un"> Não assinado<br><input type="checkbox" name="opcao" value="zf"> Valor 0 se for númerico<br><input type="checkbox" name="opcao" value="ai"> Incremento automático<br><input type="checkbox" name="opcao" value="g"> Coluna gerada</div>');
                    
                });

            $('form').on('click', '.btn-apagarC', function () {
                var button_id = $(this).attr("id");
                $('#campo' + button_id + '').remove();
            });
        </script>

        <?php
         //$nome = isset($_GET['nomeCampo']) ? $_GET['nomeCampo'] : "";
         //echo $nome;
        ?>
    </body>
</html>