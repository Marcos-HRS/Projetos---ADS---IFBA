<?php 
// Autor: Marcos Henrique Ribeiro Silva

require 'rb.php';


R::setup( 'mysql:host=localhost;dbname=ativ_marcos','root', '' );

$token = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
$image = filter_input(INPUT_POST, 'image');
$RG = filter_input(INPUT_POST, 'RG');
$CPF = filter_input(INPUT_POST, 'CPF');
$senha = filter_input(INPUT_POST, 'senha');


$cadastro = R::dispense('cadastrousuarios');


	$cadastro->token= $token;
	$cadastro->nome= $nome;
	$cadastro->email=$email;
	$cadastro->linkimagem=$image;
	$cadastro->RG=$RG;
	$cadastro->CPF=$CPF;
	$cadastro->senha=$senha;

	$id = R::store($cadastro);


	$pagina = 'Home.php';
	echo $pagina;


?>