<?php

	class conexao{
	
		public function con(){
		
			$connect = mysqli_connect("localhost","root","") or die(mysqli_error());
			mysqli_select_db($connect,"oempro") or die(mysql_error());
		
			return $connect;
		}
	}

?>