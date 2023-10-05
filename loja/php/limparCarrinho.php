<?php

setcookie("localFrete", false);

if (isset($_COOKIE["carrinhoAtual"])) {
    $carrinhoAtual = $_COOKIE["carrinhoAtual"];

    foreach ($carrinhoAtual as $id=>$qtd) {
        setcookie("carrinhoAtual", false);
    }
}

echo "<p class=\"titulo\">Carrinho vazio</p>";