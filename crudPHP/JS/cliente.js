function telaListar(){

	window.location.href = 'listarClientes.php';
}

function telaCadastro(){

	window.location.href = 'formCadastro.php';
}

function telaEditarCadastro(valor){

	//window.location.href = 'formEditarCadastro.php?id='+valor;
	
	$('#idFormulario').val(valor);
	$('#formulario').submit();
}

function excluirCadastro(valor){
	
	var result = confirm('Você realmente deseja excluir o cadastro?');
	
	if(result===true){
	
	$.ajax({
		type:"POST",
		url:"Controle/controleCliente.php",
		data:{acao:"Excluir",id:valor},
		
		success: function(data){
		
		alert('Cliente Deletado');
		document.location.reload(true);
		}
	});
	}
}

function inserirCadastro(){
	
	Nome  = $('#Nome').val();
	Idade = $('#Idade').val();
	
	$.ajax({
		type:"POST",
		url:"Controle/controleCliente.php",
		data:{acao:"Insere",Nome:Nome,Idade:Idade},
		
		success: function(data){
		
		alert('O cliente ' + Nome + ' foi cadastrado');
		document.location.reload(true);
		}
	});
}

function editarCadastro(){
	
	Nome  = $('#Nome').val();
	Idade = $('#Idade').val();
	id    = $('#id').val();
	
	var result = confirm('Você realmente deseja editar o cadastro?');
	
	if(result===true){
	
	$.ajax({
		type:"POST",
		url:"Controle/controleCliente.php",
		data:{acao:"Atualiza",Nome:Nome,Idade:Idade,id:id},
		
		success: function(data){
		
		alert('Cliente Editado');
		telaListar();
		}
	});
	}
}