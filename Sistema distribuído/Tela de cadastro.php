<!DOCTYPE html>
<html>
<!-- Autor: Marcos Henrique Ribeiro Silva-->
<head>
	<meta charset="utf-8">
	<title>Página PHP cadastro</title>	
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="bancocadastro.php" method="post">
<h1>Formulário de autenticação</h1>
<p><b>Nome Completo:</b></p>
<input type="name" name="nome" placeholder="Coloque o seu nome completo" required=" " class="input" id="name">
<p><b>Email:</b></p>
<input type="name" name="email" placeholder="Coloque o seu email" required=" " class="input" id="email">
<p><b>RG:</b></p>
<input type="name" name="RG" placeholder="Coloque o seu RG" required=" " class="input" id="RG">
<p><b>CPF:</b></p>
<input type="name" name="CPF" placeholder="Coloque o seu CPF" required=" " class="input" id="CPF">
<p><b>Senha:</b></p>
<input type="password" name="senha" placeholder="Coloque a sua senha" required=" " class="input" id="senha">
<p>Use senhas que consiga lembrar</p>
<input type="submit" name="enviar" id="enviar">
</form>

</body>
</html>