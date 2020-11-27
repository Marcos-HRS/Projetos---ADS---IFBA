<?php

#ControllerCorreios
include("ConsultaCorreio.php");

$CepOrigem='45836000';
$CepDestino=filter_input(INPUT_POST,'CEP',FILTER_SANITIZE_SPECIAL_CHARS);
$Peso='10';
$Formato='10';
$Comprimento='10';
$Altura='10';
$Largura='10';
$MaoPropria='N';
$ValorDeclarado='0';
$AvisoRecebimento='N';
$Codigo='40010';
$Diametro='10';

$Correios=new ClassCorreios();
$Correios->pesquisaPrecoPrazo($CepOrigem,$CepDestino,$Peso,$Formato,$Comprimento,$Altura,$Largura,$MaoPropria,$ValorDeclarado,$AvisoRecebimento,$Codigo,$Diametro);


?>