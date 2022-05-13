<?php
$data = "2022-04";
// $data = DateTime::createFromFormat('Y-m',$data);
// echo $data->format('Y')."<br>";
// echo $data->format('m');

// echo date_format(date_create($data),'m');
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
    <div class="container bg-white" style="margin-top: 3.5rem;position: fixed;left: 0;top: 0;right: 0;z-index: 10;">
        <div class="media text-muted pt-2"> 
          <div class="media-body pb-1 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="h5 text-dark">Pesquisas Financeiro <span class="text-danger">Em desenvolvimento</span> </strong> 
                            
            </div>
          </div>
        </div>
    </div>

    <div class="container " style="margin-top: 7.0rem;">   
      
        <form class="d-print-none" id="frm_principal" action="#" method="post">
            <input type="hidden" name="classe" value="financeiro">
            <input type="hidden" name="p" value="contas_pagar">
            <input type="hidden" name="a" value="pesquisa_financeiro">
            <input type="hidden" name="acao" id="acao" value="pesquisar">           
        
            <div class="form-group row">
                <label for="staticEmail" class="col-lg-2 col-form-label col-form-label-sm font-weight-bold">Pesquisar por:</label>
                <div class="col-lg-3 mb-2 mb-lg-0">
                    <select class="form-control form-control-sm" id="inputEstado" aria-label="" name="campo">
                        <?php
                        $opcoes = ['','Colaborador','Mês/Ano referência','Valor pago','Data do comprovante'];
                        // $html="<option value=''><option>";
                        foreach ($opcoes as $key => $value) {
                            $selected="";
                            if($_POST['campo']==$key){$selected = "selected";}
                            $html.='<option value="'.$key.'" '.$selected.' >'.$value.'</option>';
                        }
                        echo $html;
                        ?>
                    </select>
<!--                     
                    <select id="inputEstado" class="form-control form-control-sm">
                    <option selected></option>
                    <option>Colaborador</option>
                    <option>B</option>
                    <option>C</option>
                    </select> -->
                </div>
                <div class="col-lg-3" id="inputZero"><input type='text' name="inputZero" class="form-control form-control-sm" placeholder="Nome"></div>
                <div class="col-lg-3" id="inputUm"><input type='month' name="inputUm" class="form-control form-control-sm"></div>
                <div class="col-lg-3" id="inputDois"><input type='date' name="inputDois" class="form-control form-control-sm"></div>
                <div class="col-lg-3" id="inputTres"><input type='date' name="inputTres" class="form-control form-control-sm"></div>
                <div class="col-lg-3" id="inputQuatro"><input type="text" name="inputQuatro" class="form-control form-control-sm limpaZero" placeholder="0,00" onkeydown="mascara(this,mvalor)"></div>
                <div class="col-lg-3" id="inputCinco"><input type="text" name="inputCinco" class="form-control form-control-sm limpaZero" placeholder="0,00" onkeydown="mascara(this,mvalor)"></div>
                <button type="submit" class="btn btn-sm btn-info ml-auto mr-3 mt-lg-0 mt-2">Pesquisar</button> 
            </div>
                         
        </form>        
        <div class="table-responsive-lg">
            <table class="table table-bordered table-hover table-light table-sm small text-center">
                <thead>
                    <tr class="table-active">
                        <th scope="col" rowspan="2">Colaborador</th>
                        <th scope="col" rowspan="2">Nome</th>
                        <th scope="col" rowspan="2">Data</th>
                        <th scope="col" colspan="2">Referência</th>
                    </tr>
                    <tr class="table-active">
                        <th scope="col">Ano</th>
                        <th scope="col">Mês</th>
                    </tr>
                </thead>                
                <tbody>
                    <?php 
                        // foreach ($results as $key => $value) {
                    ?>                            
                    <tr>                        
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>                                                
                        <td>a</td>                                                
                        <td>a</td>                                                
                    </tr>
                    <?
                    // }
                    ?>                                                  
                </tbody>            
            </table>
        </div>
    </div>
    </div> 
      

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        var select   = document.getElementById("inputEstado");
        var inputUm   = document.getElementById("inputUm");
        var inputDois   = document.getElementById("inputDois");
        var inputTres   = document.getElementById("inputTres");
        var inputQuatro   = document.getElementById("inputQuatro");
        var inputCinco   = document.getElementById("inputCinco");
        inputUm.classList.add('d-none')
        inputDois.classList.add('d-none')
        inputTres.classList.add('d-none')
        inputQuatro.classList.add('d-none')
        inputCinco.classList.add('d-none')
        // conceptName = select.options[select.selectedIndex].text;
        var variavel = '';
        var variavelDois = '';
        // $opcoes = ['','Colaborador','Mês/Ano referência','Valor pago','Data do comprovante'];
        variavelDois = select.options[select.selectedIndex].value;
        if(variavelDois){chama(variavelDois);}
        
        select.onchange = function(){
            variavel = this.value;
            console.log(variavel);
            chama(variavel);            
        }

        function chama(variavel){ 
            switch (variavel) {
                case '2':
                    inputZero.classList.add('d-none')
                    inputDois.classList.add('d-none')
                    inputTres.classList.add('d-none')
                    inputQuatro.classList.add('d-none')
                    inputCinco.classList.add('d-none')                    
                    inputUm.classList.remove('d-none')
                    break;
                case '3':
                    inputZero.classList.add('d-none')
                    inputUm.classList.add('d-none')
                    inputDois.classList.add('d-none')
                    inputTres.classList.add('d-none')
                    inputQuatro.classList.remove('d-none')
                    inputCinco.classList.remove('d-none')                    
                    break;
                case '4':
                    inputZero.classList.add('d-none')
                    inputUm.classList.add('d-none')
                    inputQuatro.classList.add('d-none')
                    inputCinco.classList.add('d-none')
                    inputDois.classList.remove('d-none')
                    inputTres.classList.remove('d-none')                    
                    break;                                    
                default:
                    inputZero.classList.remove('d-none')
                    inputUm.classList.add('d-none')  
                    inputDois.classList.add('d-none')  
                    inputTres.classList.add('d-none') 
                    inputQuatro.classList.add('d-none')
                    inputCinco.classList.add('d-none')                    
                    break;
            }
        }
    </script>

  </body>
</html>