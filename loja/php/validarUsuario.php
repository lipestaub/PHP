<?php

if (isset($_POST["email"]) && isset($_POST["senha"])) {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $result = mysqli_query($conn, "SELECT email FROM usuario WHERE email = '$email' AND senha = '$senha'");

    if (mysqli_num_rows($result) > 0) {
        include "cadastrarPedido.php";
    }
    else {
        echo "<p class=\"erro\">Dados incorretos! Verifique seu e-mail e sua senha e tente novamente!</p>";
    }
}
?>

<p> <a href="javascript:Loja('novoUsuario', 0);">SOU CLIENTE NOVO</a>

<form id="formAjax" action="javascript:void%200" onsubmit="enviaDados('php/validarUsuario.php'); return false;">
    <p> JÁ TENHO CADASTRO (insira seus dados) </p>
    <p>E-mail: <input name="email" type="text" maxlength="100"></p>
    <p>Senha: <input name="senha" type="password" size="20" maxlength="20"></p>
    <p> <input name="Concluir" type="submit" value="Concluir"> </p>
</form>