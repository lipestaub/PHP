<?php
	include("../Controle/controleCliente.php");
	$id = $_POST['id'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src="../JS/cliente.js"></script>
</head>
	<?php
	$obj_cliente   = new Cliente();
	$arrayClientes = $obj_cliente -> busca($id);
	?>
<body>
	<form action="" method="POST">
		Nome: <input type="text" id="Nome" name="Nome" value="<?php echo $arrayClientes[0]['nomeCliente'] ?>"><br>
		Idade: <input type="text" id="Idade" name="Idade" value="<?php echo $arrayClientes[0]['idadeCliente'] ?>">
		<input type="hidden" id="id" name="id" value="<?php echo $arrayClientes[0]['idCliente'] ?>">
		
		<input type="button" onclick="editarCadastro()" value="Atualizar">

	</form>
	
	<br>
	<input type="button" onclick="telaListar()" value="Lista">
</body>
</html>
