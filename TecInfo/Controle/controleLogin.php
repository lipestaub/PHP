<?php

	include($_SERVER['DOCUMENT_ROOT']."/Modelo/ConexaoBD");

	class Login{
		
		function verificar($emailUsuario, $senhaUsuario){
			
			$obj_con  = new conexaoBD();
			$connect  = $obj_con -> con();

			$query = "SELECT * FROM usuario WHERE emailUsuario='".$emailUsuario."' AND senhaUsuario='".$senhaUsuario."'";
		
			$result = mysqli_query($connect, $query);
			
			$row = mysql_num_rows($result);
			
			return $row;
		}
	}

?>