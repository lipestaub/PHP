<?php

	include($_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php");


	class Cliente{
		
		public function busca($id=false){
			
			$obj_con  = new conexaoBD();
			$conectar = $obj_con -> con();

			$query = "SELECT * FROM cliente ";
			if($id>0){
				$query .="WHERE idCliente =".$id;
			}
			$resultado = mysqli_query($conectar,$query);
			
			$i = 0;
			
			while($dados = mysqli_fetch_assoc($resultado)){
				$row[$i]['idCliente']    = $dados['idCliente'];
				$row[$i]['nomeCliente']  = $dados['nomeCliente'];
				$row[$i]['idadeCliente'] = $dados['idadeCliente'];
				$i++;
			}
			
			return $row;
		}
		
		function insere($nomeCliente,$idadeCliente){
			
			$resultado = true;
			
			$obj_con  = new conexaoBD();
			$conectar = $obj_con -> con();
			
			$query = "INSERT INTO cliente (nomeCliente, idadeCliente) VALUES ('".$nomeCliente."', ".$idadeCliente.");";
			mysqli_query($conectar,$query)or die($resultado = false);
			
			if($resultado === false){
				return false;
			}else{
			return true;
			}
		}
		
		function atualiza($nomeCliente,$idadeCliente,$idCliente){
			
			$resultado = true;
			
			$obj_con  = new conexaoBD();
			$conectar = $obj_con -> con();
			
			$query = "UPDATE cliente SET nomeCliente='".$nomeCliente."',idadeCliente='".$idadeCliente."' WHERE idCliente=".$idCliente.";";
			mysqli_query($conectar,$query)or die($resultado = false);
		
		if($resultado === false){
				return false;
			}else{
				return true;
			}
		}
		
		function deleta($idCliente){
			$resultado = true;
			
			$obj_con  = new conexaoBD();
			$conectar = $obj_con -> con();
			
			$query = "DELETE FROM cliente WHERE idCliente=".$idCliente.";";
			mysqli_query($conectar,$query)or die($resultado = false);
		
		if($resultado === false){
				return false;
			}else{
				return true;
			}
		}
	}	
?>