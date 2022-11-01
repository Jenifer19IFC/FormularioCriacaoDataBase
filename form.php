<!--<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Formm aula</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
      .form-group{
        padding: 10px;
      }
    </style>
    <meta charset="utf-8">
  </head>
  <body>


    <form id ="add-tabela" method="POST">
          <div id="formTabela">
            <div class="form-group">
              <label for="tabela">Tabela:  </label>
              <input type="text" id="tabela" name="tabela[]" placeholder="Digite o nome da tabela  ">
              <button type="button" id="add-tabela"> ✖️​ </button>
            </div>
          </div>
          <div class="form-group">
            <input type="button" name="CadTabelas" id="CadTabelas" value="Cadastrar">
          </div>
    </form>

    
    <script>

     /* var cont = 1;

      $( "#add-tabela" ).click(function() {
        cont++;
        $( "#formTabela" ).append('<div class="form-group" id="campoTabela' + cont + '"><label for="tabela">Tabela: </label><input type="text" id="tabela" name="tabela[]" placeholder="Digite o nome da tabela"> <button id="'+ cont +'" class="btn-apagar">  ❌ </button></div>');
      });

      $( "form" ).on( "click", ".btn-apagar", function() {
        var button_id = $( this ).attr( "id" );
        $( '#campoTabela' + button_id ).remove();
      });

      $( "#CadTabelas" ).click(function() {
        var dados = $("#add-tabela").serialize();
        alert(dados);
      });

    </script>


  </body>
</html>