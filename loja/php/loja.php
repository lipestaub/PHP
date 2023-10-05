<?php

$gmtDate = gmdate("D, d M Y H:i:s");

header("Expires: {$gmtDate} GMT");
header("Last-modified: {$gmtDate} GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-Type: text/html; charset=UTF-8");

include "conectar.php";

if (isset($_GET["inicio"]) || isset($_GET["busca"]) || isset($_GET["categoria"])) {
    include "listarProdutos.php";
}
elseif (isset($_GET["detalhes"])) {
    include "mostrarDetalhes.php";
}
elseif (isset($_GET["carrinho"]) || isset($_GET["frete"]) || isset($_GET["quantidade"])) {
    include "carrinho.php";
}
elseif (isset($_GET["limpar"])) {
    include "limparCarrinho.php";
}
else if (isset($_GET["validarUsuario"])) {
    include "validarUsuario.php";
}
elseif (isset($_GET["novoUsuario"])) {
    include "novoUsuario.php";
}
else {
    echo "Erro: Acesse o home da loja";
}
