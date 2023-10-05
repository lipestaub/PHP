<?php

include "conectar.php";

$pesototal = 0;

foreach ($carrinhoAtual as $id => $qtd) {
    $result = mysqli_query($conn, "SELECT peso FROM produto WHERE idProduto=$id");
    $dados = mysqli_fetch_row($result);
    $pesototal += $qtd * $dados[0];
}

if (isset($_GET["frete"])) {
    $localFrete = $_GET["frete"];
}
elseif (isset($_COOKIE["localFrete"])) {
    $localFrete = $_COOKIE["localFrete"];
}
else {
    $localFrete = "";
}

$result = mysqli_query($conn, "SELECT preco FROM frete WHERE local='$localFrete' AND pesoLimite > $pesoTotal ORDER BY pesoLimite");

if (mysqli_num_rows($result) > 0) {
    $dados = mysqli_fetch_row($result);
    $valorFrete = $dados[0];
    setcookie("localFrete", $localFrete);
}
else {
    $valorFrete = 0;
}

setcookie("valorFrete", $valorFrete);
