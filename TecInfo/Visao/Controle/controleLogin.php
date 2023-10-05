<script type="application/javascript" src="../JS/login.js"></script>

<?php
	
	include($_SERVER['DOCUMENT_ROOT']."/Controle/controleLogin.php");

	$emailUsuario = $_POST["email"];
	$senhaUsuario = $_POST["senha"];

	$acao 		  = $_POST["acao"];

	$obj_login = new Login();

	if($acao=="verificar"){
		
		$result = $obj_login -> verificar($emailUsuario, $senhaUsuario);
		
	}

	if($row > 0){
			
		telaPrincipal();
			
	}else{
			
		erroLogin();
			
	}

?>