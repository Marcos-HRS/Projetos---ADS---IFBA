<!DOCTYPE html>
<html>
<!-- Autor: Marcos Henrique Ribeiro Silva-->
<head>
	<meta charset="utf-8">
	<title>Página PHP login</title>
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
<form action="autentica.php" method="post">
  <h1>Olá, adicione seus dados para realizar o login!</h1>
  <p><b>Email:</b></p>
  <input type="name" name="email" placeholder="Coloque o seu email" required=" " class="input" id="email">
  <p><b>Senha:</b></p>
  <input type="password" name="senha" placeholder="Coloque a sua senha" class="input" id="senha">
  <hr>
  <div>
    <input type="submit" name="Autenticacao" id="Autenticacao" value="Entrar" class="btn btn-primary" style="margin-left: 30%">
    <br>
    <div>
      <div class="g-signin2" data-onsuccess="onSignIn">

      </div>
      <a href="Tela de cadastro.php" style="margin-left: 80%;">Cadastre-se</a>
    </div>


</form>
<script type="text/javascript">
	
	function onSignIn(googleUser) {
		var profile = googleUser.getBasicProfile();
  	var id =  profile.getId(); // Do not send to your backend! Use an ID token instead.
  	var nome = profile.getName();
  	var image = profile.getImageUrl();
  	var email = profile.getEmail(); // This is null if the 'email' scope is not present.


    if (nome !== '') {

      var dados = {
       id:id,
       nome:nome,
       image:image,
       email:email
      };

      $.post('bancocadastro.php',dados,function(retorna){

        window.location.href = retorna;
      });

    }

    document.getElementById("email").value = email; 


}


</script>
</body>
</html>
