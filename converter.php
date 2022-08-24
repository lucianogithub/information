<?php

// AQUI ABRE O ARQUIVO PDF

// $file = 'arquivos/boleto_digital.pdf';
// $filename = 'Custom file name for the.pdf'; /* Note: Always use .pdf at the end. */
// header('Content-type: application/pdf');
// header('Content-Disposition: inline; filename="' . $filename . '"');
// header('Content-Transfer-Encoding: binary');
// header('Content-Length: ' . filesize($file));
// header('Accept-Ranges: bytes');
// @readfile($file);

?>

<!-- <iframe src="https://view.officeapps.live.com/op/embed.aspx?src={https://alcateia.dubsol.app/arquivos/THE%20SANDMAN%20VOLUME%201-01%20O%20sono%20dos%20justos.pdf}"></iframe> -->
<!-- <iframe src="http://docs.google.com/gview?url={https://alcateia.dubsol.app/arquivos/THE%20SANDMAN%20VOLUME%201-01%20O%20sono%20dos%20justos.pdf}&amp;embedded=true"></iframe> -->


    
    
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
    
        <button type="button" class="btn btn-sm btn-info font-weight-bold" onclick="window.open('https://docs.google.com/viewerng/viewer?url=<?=WEB_ARQUIVO.$inf['script_original']?>');"><?=$lang['abrir']?></button>
    
    </div> 
      

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

   </body>
</html>