<?php
	include("../Controle/controleCliente.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listar Clientes</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src="../JS/cliente.js"></script>
</head>
	<?php
	$obj_cliente   = new Cliente();
	$arrayClientes = $obj_cliente -> busca();
	?>
<body>
	
	<table border=1>
		<tr>
			<td style="text-align: center">Nome</td>
			<td style="text-align: center">Idade</td>
			<td style="text-align: center">Ação</td>
		</tr>
		
	<?php
		
	foreach($arrayClientes as $value){
		
	?>
		<tr>
			<td><?php echo $value['nomeCliente'].'<br>' ?></td>
			<td style="text-align: center" ><?php echo $value['idadeCliente'].'<br>' ?></td>
			<td><input type="button" onclick="telaEditarCadastro(<?php echo $value['idCliente'] ?>)" value="Editar">&nbsp;<input type="button" onclick="excluirCadastro(<?php echo $value['idCliente'] ?>)" value="Excluir"></td>
		</tr>
	<?php
	}
	?>
	</table>
	<br>
	<input type="button" onclick="telaCadastro()" value="Cadastrar">
	
	<form id="formulario" action="formEditarCadastro.php" method="POST">
		<input type="hidden" id="idFormulario" name="id">
	</form>
	
</body>
</html>
