<?php

    // echo "<br><hr>";
    $nome = 'Luciano de Oliveira Paula';
    $nome = explode(' ',$nome);
    
    $sobrenome="";
    foreach ($nome as $key => $value) {
        if($key!=0){
            $sobrenome .= $value." ";
        }        
    }
    // echo $sobrenome;

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Primeiro</th>
              <th scope="col">Último</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><input type='text' class='valor' name='nome[1]' custo='1'></td>
              <td><input type='text' id='1' name='nome_english[1]' ></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><input type='text'  class='valor' name='nome[2]' custo='2'></td>
              <td><input type='text' id='2' name='nome_english[2]' ></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><input type='text' class='valor' name='nome[3]' custo='3'></td>
              <td><input type='text' id='3' name='nome_english[3]' ></td>
            </tr>
          </tbody>
        </table>
      </div>   
      

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $(".valor").on("input", function(){
                var textoDigitado = $(this).val();                
                var inputCusto = $(this).attr("custo");
                $("#"+ inputCusto).val(textoDigitado);
            });
        });
      </script>

  </body>
</html>