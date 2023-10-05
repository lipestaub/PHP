<?php

include "conectar.php";

if (isset($_COOKIE["valorFrete"]) && isset($_COOKIE["valorFrete"]) > 0 && isset($_COOKIE["carrinhoAtual"])) {
    $frete = $_COOKIE["valorFrete"];
    $data = date("Y-m-d");

    $result = mysqli_query($conn, "INSERT INTO pedido(email, data, valorTotal, precoFrete) VALUES('$email', '$data', 0, '$frete')");

    $idPedido = mysqli_insert_id($conn);

    $carrinhoAtual = $_COOKIE["carrinhoAtual"];
    $valorTotal = 0;

    foreach ($carrinhoAtual as $id=>$qtd) {
        $result = mysqli_query($conn, "SELECT preco, precoPromocao FROM produto WHERE idProduto=$id");

        $dados = mysqli_fetch_row($result);

        $preco = $dados[0];
        $precoPromocao = $dados[1];

        if ($precoPromocao > 0) {
            $preco = $precoPromocao;
        }

        $valorTotal += $preco * $qtd;

        $result = mysqli_query($conn, "INSERT INTO itemPedido VALUES($idPedido, $id, $preco, $qtd)");
    }

    $result = mysqli_query($conn, "UPDATE pedido SET valorTotal = $valorTotal WHERE idPedido = $idPedido");

    setcookie("localFrete", false);

    if (isset($_COOKIE["carrinhoAtual"])) {
        $carrinhoAtual = $_COOKIE["carrinhoAtual"];

        foreach ($carrinhoAtual as $id=>$qtd) {
            setcookie("carrinhoAtual[$id]", false);
        }
    }

        echo "<p class=\"titulo\">Parabéns, seu pedido foi concluido sob o número $idPedido.</p>";
        echo "<p class=\"descricao\">Realize o deposito na Agencia 6666, Conta 8888, Banco Tabajara.</p>";
}
else {
    if (!isset($_COOKIE["carrinhoAtual"])) {
        echo "<p class=\"erro\">Seu carrinho esta vazio! Insira os produtos desejados.</p>";
    }
    else {
        echo "<p class=\"erro\">Voce nao calculou o frete! Escolha o local de entrega.</p>";
    }

    echo "<p align=\"center\"><a href=\"javascript:Loja('carrinho', 0);\">Clique aqui</a></p>";
}
exit();