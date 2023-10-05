function verificacao(){
	
	email = $('#email').val();
	senha = $('#senha').val();
	
	$.ajax({
		
		type:"POST",
		url:"Visao/Controle/controleLogin.php",
		data:{acao:"verificar",email:email,senha:senha},
		
		success: function(data){
			
		}
		
	});
}

function telaPrincipal(){
	
	window.location.href = 'telaPrincipal.php';
	
}

function erroLogin(){
		
		window.alert("Usuário não encontrado. Verifique o e-mail e senha.");
		document.location.reload();
	
}