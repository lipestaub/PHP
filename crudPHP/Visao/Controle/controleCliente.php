<?php
	include("../../Controle/controleCliente.php");

	$nomeCliente  = $_POST["Nome"];
	$idadeCliente = $_POST["Idade"];
	$idCliente    = $_POST["id"];

	$acao         = $_POST["acao"];

	$obj_cliente  = new Cliente();

	if($acao == "Insere"){
		$result = $obj_cliente -> insere($nomeCliente,$idadeCliente);
	}else if($acao == "Atualiza"){
		$result = $obj_cliente -> atualiza($nomeCliente,$idadeCliente,$idCliente);
	}else if($acao == "Excluir"){
		$result = $obj_cliente -> deleta($idCliente);
	}
?>