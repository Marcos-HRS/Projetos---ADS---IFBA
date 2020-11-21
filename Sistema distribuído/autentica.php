<?php 
// Autor: Marcos Henrique Ribeiro Silva

require 'rb.php';

R::setup( 'mysql:host=localhost;dbname=ativ_marcos','root', '' );

$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha');

$reports = R::findAll('cadastrousuarios');



foreach ($reports as $report) {

	if ($report->email == $email && $report->senha == $senha) {

		$redirect  = 'Home.php';

		header("location:$redirect");
		
	}
}



?>