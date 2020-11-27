<!DOCTYPE html>
<html>
<!-- Autor: Marcos Henrique Ribeiro Silva-->
<head>
	<meta charset="utf-8">
	<title>Página PHP - Tela de dados correio</title>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="171532495593-ddpn6ec4qgd04u8h8vh3q47a3ks4pqkm.apps.googleusercontent.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <meta name="viewport" content="width=device-width, initial-scale=2">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="ConsultaWsCEP.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</head>
<body>
  <form action="" method="" id="FormCEP" name="FormCEP">
    <h1>Consultar frete</h1>
    <a href="Home.php" style="margin-left: 80%;">Voltar</a>
    <a href="Tela de login.php" style="margin-left: 80%;">Sair</a>
    <p><b>CEP</b></p>
    <input type="text" name="CEP" placeholder="Digite o CEP" required=" " class="input" id="CEP">
    <input type="submit" name="consultar" id="consultar" value="Consultar">

    <div id="retornoCEP">
      <h2>Dados da entrega:</h2>
    </div>
  </form>

  <form action="ConsultaRastreio.php" method="post" id="Formrastreio" name="Formrastreio">
    <h1>Rastrear pedido</h1>
    <p><b>Código rastreio</b></p>
    <input type="text" name="rastreio" placeholder="Digite o Código" required=" " class="input" id="rastreio">
    <input type="submit" name="consultarR" id="consultarR" value="Consultar">

    <div id="retornorastreio">
    </div>
  </form>

</body>
</html>