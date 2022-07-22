<?php

$vendorDirPath = realpath(__DIR__); echo $vendorDirPath.'/vendor';

// $personagem = "TESTE 1; TESTE 2";
// $personagem = explode(';',$personagem);
// $nome="";
// foreach ($personagem as $key => $value) {
//   $nome .= $value.";";
// }
// echo rtrim($nome,';');

// $nome = "Luciano";
// $numero = 5;
// $imp="";
// for ($i=0; $i < $numero; $i++) { 
//   for ($ii=0; $ii <= $i ; $ii++) { 
//     echo $nome." ";
//   }  
//   echo "<br>";
// }


// $opcoes = ['Colaborador','Ano referência','Mês referência','Valor pago','Data do comprovante'];
// foreach ($opcoes as $key => $value) {
//   echo $key." - ".$value."<br>";
// }

    // echo "<br><hr>";
    // $nome = 'lucano 45, bruna, homem';  
    // // echo str_replace('','',$nome); 
    
    // if(preg_match("/^[a-zA-Z'-]+$/", $nome) || preg_match("/ \s*/",$nome)){
    //   echo "Tudo Certo!";
    // }else{
    //   echo "Caracter especial!";
    // }
    // $nome = explode(' ',$nome);
    
    // $sobrenome="";
    // foreach ($nome as $key => $value) {
    //     if($key!=0){
    //         $sobrenome .= $value." ";
    //     }        
    // }
    // echo $sobrenome;

    // if(in_array(4,[690,3,41])){echo 'tem';}

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
      th {vertical-align: middle !important;}
    </style>
    <title>Olá, mundo!</title>
  </head>
  <body>
    <div class="container">
        <!-- <table class="table table-bordered ">
          <thead>
            <tr>
              <th colspan="2" scope="col">Primeiro</th>
              <th rowspan="2" scope="col">Terceiro</th>
              <th rowspan="2" scope="col">Quarto</th>
            </tr>
            <tr>
              <th scope="col">1</th>
              <th scope="col">2</th>              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>            
              <td></td>            
              <td></td>            
            </tr>            
          </tbody>
        </table>
      </div> -->

      <!-- <div class="container">
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
              <td><input type='text' class='nome' name='nome[1]' custo='1'></td>
              <td><input type='text' id='1' name='nome_english[1]' ></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><input type='text'  class='nome' name='nome[2]' custo='2'></td>
              <td><input type='text' id='2' name='nome_english[2]' ></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><input type='text' class='nome' name='nome[3]' custo='3'></td>
              <td><input type='text' id='3' name='nome_english[3]' ></td>
            </tr>
          </tbody>
        </table>
      </div>-->

      <!-- <div class="container border border-danger">
        
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm border">Pesquisar por:</label>
          <div class="col-sm-4">
            <select id="inputEstado" class="form-control form-control-sm">
              <option selected></option>
              <option>A</option>
              <option>B</option>
              <option>C</option>
            </select>
          </div>
          <div class="col-sm-3"><input type='text' class="form-control form-control-sm"></div>
          <div class="col-sm-3" id="inputDois"><input type='text' class="form-control form-control-sm"></div>
        </div>

      </div> -->
      

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
      var select   = document.getElementById("inputEstado");
      var inputDois   = document.getElementById("inputDois");
      inputDois.classList.add('d-none')
      var variavel = '';
      select.onchange = function(){
          variavel = this.value;
          if(variavel=='B'){  
            inputDois.classList.remove('d-none')
          }else{                         
            inputDois.classList.add('d-none')  
          }
      }

        $(document).ready(function(){
            // $(".nome").on("input", function(){
            //     var textoDigitado = $(this).val();                
            //     var inputCusto = $(this).attr("custo");
            //     $("#"+ inputCusto).val(textoDigitado);
            //     console.log(textoDigitado);
            // });
            
            // var info = $('#inputEstado').val();
            // console.log(info);
        });
        // document.addEventListener('click', function (e) {
        //   var info = $('#inputEstado').val();
        //   console.log(info);
        // });

        document.addEventListener('keyup', function (e) {
          var codigoTecla = e.which || e.keyCode || 0;
          // console.log(codigoTecla);
          var valida = codigoTecla == 9;
          if(valida){
            $(".nome").on("input", function(){
                var textoDigitado = $(this).val();                
                var inputCusto = $(this).attr("custo");
                $("#"+ inputCusto).val(textoDigitado);
                console.log(textoDigitado);
            });
          }
        });
      </script>

  </body>
</html>