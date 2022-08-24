<?php

$opcoes = ["", "TI", "Esportes"];
$opcoesDois = ['Escolha', 'MS', 'Excel', 'Word'];
$opcoesTres = ['Escolha', 'Corrida', 'Box', 'Volei'];

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
        th {
            vertical-align: middle !important;
        }
    </style>
    <title>Olá, mundo!</title>
</head>

<body>
    <div class="container">
        <div class="container bg-white" style="margin-top: 3.5rem;position: fixed;left: 0;top: 0;right: 0;z-index: 10;">
            <div class="media text-muted pt-2">
                <div class="media-body pb-1 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="h5 text-dark"><span class="text-danger">Em desenvolvimento</span> </strong>

                    </div>
                </div>
            </div>
        </div>

        <div class="container " style="margin-top: 7.0rem;">

            <!-- <form class="d-print-none" id="frm_principal" action="#" method="post">
                <input type="hidden" name="classe" value="financeiro">
                <input type="hidden" name="p" value="contas_pagar">
                <input type="hidden" name="a" value="pesquisa_financeiro">
                <input type="hidden" name="acao" id="acao" value="pesquisar">

                <div class="form-group row">
                    <label for="staticEmail" class="col-lg-2 col-form-label col-form-label-sm font-weight-bold">categoria:</label>
                    <div class="col-lg-3 mb-2 mb-lg-0">
                        <select class="form-control form-control-sm" id="inputEstado" aria-label="" name="campo">
                            <?php

                            // $html="<option value=''><option>";
                            foreach ($opcoes as $key => $value) {
                                $selected = "";
                                if ($_POST['campo'] == $key) {
                                    $selected = "selected";
                                }
                                $html .= '<option value="' . $key . '" ' . $selected . ' >' . $value . '</option>';
                            }
                            echo $html;
                            ?>
                        </select>

                    </div>

                    <label for="staticEmail" class="col-lg-2 col-form-label col-form-label-sm font-weight-bold">subcategoria:</label>
                    <div class="col-lg-3 mb-2 mb-lg-0">
                        <select class="form-control form-control-sm" id="inputEstado" aria-label="" name="campo">
                            <?php

                            // $html="<option value=''><option>";
                            $html = "";
                            foreach ($opcoesDois as $key => $value) {
                                $selected = "";
                                if ($_POST['campo'] == $key) {
                                    $selected = "selected";
                                }
                                $html .= '<option value="' . $key . '" ' . $selected . ' >' . $value . '</option>';
                            }
                            echo $html;
                            ?>
                        </select>

                    </div>

                </div>

            </form> -->
            Estado:
            <select id="estados" class="form-control form-control-sm">
                <option>Selecione</option>
                <option value="sp">São Paulo</option>
                <option value="pr">Paraná</option>
            </select>

            Cidade:
            <select id="cidades" class="form-control form-control-sm">

            </select>

        </div>

    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script>
        var arrayDeCidades = [{
                "nome": "Bauru",
                "estado": "sp"
            },
            {
                "nome": "Ourinhos",
                "estado": "sp"
            },
            {
                "nome": "Curitiba",
                "estado": "pr"
            }
        ];

        document.getElementById("estados").onchange = function() {
            var selCidades = document.getElementById("cidades");
            selCidades.innerHTML = "";
            var cidadesFiltradas = arrayDeCidades.filter(cidade => {
                return cidade.estado == this.value;
            });
            cidadesFiltradas.forEach(cidade => {
                var optionInc = document.createElement("OPTION");
                optionInc.innerHTML = cidade.nome;
                selCidades.appendChild(optionInc);
            });

        }

        // var cliente = 50;
        // var oQueVem = [50,30,40]
        // if(oQueVem.includes(cliente)){
        //     console.log('tem');
        // }        
    </script>

</body>

</html>