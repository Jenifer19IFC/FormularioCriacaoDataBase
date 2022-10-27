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
            <div id="formularioC">
                <div class="form-groupC">
                    <label>Campo: </label>
                    <input type="text" name="nomeCampo[]" placeholder="Digite o nome do campo">
                    <button type="button" id="add-campo"> ✖️ </button>
                </div>
            </div>
            <div class="form-groupC">
                <input type="button" value="Cadastrar">
            </div>
        </form>

        <script>
            var cont = 1;
            //https://api.jquery.com/click/
                $('#add-campo').click(function () {
                    cont++;
                    //https://api.jquery.com/append/
                    $('#formularioC').append('<div class="form-groupC" id="campo' + cont + '"><label>Campo: </label><input type="text" name="nomeCampo[]" placeholder="Digite o nome do campo"> <button type="button" id="' + cont + '" class="btn-apagarC"> ❌​ </button></div>');
                });

            $('form').on('click', '.btn-apagarC', function () {
                var button_id = $(this).attr("id");
                $('#campo' + button_id + '').remove();
            });
        </script>

        <?php
         $nome = isset($_GET['nomeCampo']) ? $_GET['nomeCampo'] : "";

         echo $nome;
        ?>
    </body>
</html>