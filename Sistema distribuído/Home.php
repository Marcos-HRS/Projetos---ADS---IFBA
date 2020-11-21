<!DOCTYPE html>
<html>
<!-- Autor: Marcos Henrique Ribeiro Silva-->
<head>
	<meta charset="utf-8">
	<title>Página PHP Home cadastros</title>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="171532495593-ddpn6ec4qgd04u8h8vh3q47a3ks4pqkm.apps.googleusercontent.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <meta name="viewport" content="width=device-width, initial-scale=2">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<form action="" method="">
<h1>Olá, segue abaixo a lista de todos os cadastrados:</h1>
</form>

<?php

require 'rb.php';


R::setup( 'mysql:host=localhost;dbname=ativ_marcos','root', '' );

$reports = R::findAll('cadastrousuarios');


if($reports>0) {
         echo "<table border='1'>"; //Criando a tabela.
         //Aqui criamos o cabeçalho da tabela.
         // A tag <tr> abre uma linha, enquanto a <td> abre uma célula.
         echo "<th colspan = 6>Lista de cadastrados</th>";
         echo "<tr id = tr1 > <td>Foto perfil</td>"
              ."<td>Token Google</td>"
              ."<td>Nome</td>"
              ."<td>Email</td>"
              ."<td>RG</td>"
              ."<td>CPF</td>"
              ."</tr>"; // Fechamos o cabeçalho. 
} 
foreach ($reports as $report) {

  echo "<tr>" . "<td>". "<img border='0' src='".$report->linkimagem."' width='150px' height='150px'>"."</td>" .  "<td>". $report->token."</td>". "<td>". $report->nome . "</td>" . "<td>".$report->email."</td>" .  "<td>".$report->RG."</td>".  "<td>".$report->CPF."</td>".  "</tr>";

}


?>

</body>
</html>