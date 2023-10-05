<?php

if (isset($_GET["inicio"])) {
    echo "<p class=\"titulo\">Destaques</p>";
    $sql = "SELECT idProduto, nome, preco, precoPromocao FROM produto LIMIT 10";
}
elseif (isset($_GET["categoria"])) {
    $categoria = $_GET["categoria"];
    $sql = "SELECT idProduto, nome, preco, precoPromocao FROM produto WHERE idCategoria=$categoria";
}
else {
    $palavra = $_GET["busca"];
    $palavra = utf8_decode($palavra);
    $sql = "SELECT idProduto, nome, preco, precoPromocao FROM produto WHERE nome LIKE '%$palavra%'";
}

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "<p class=\"titulo\">Nenhum produto encontrado!</p>";
}
else {
    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
        $dados = mysqli_fetch_row($result);
        $idProduto = $dados[0];
        $nome = $dados[1];
        $preco = number_format($dados[2], 2, ",", ".");
        $promocao = number_format($dados[3], 2, ",", ".");

        echo "<p><img src=\"imagens/item.gif\" width=\"14\" height=\"14\"> $nome<br>";
        
        if ($promocao == "0,00") {
            echo "<span class=\"preco\">Preço: R\$ $preco</span><br>";
        }
        else {
            echo "<span class=\"preco\">Promoção: de <span class=\"promocao\">R\$ $preco</span> por R\$ $promocao </span><br>";
        }
            echo " <a href=\"javascript:Loja('detalhes','$idProduto');\"><img src=\"imagens/detalhes.gif\" border=\"0\"></a>";
            echo " <a href=\"javascript:Loja('carrinho', '$idProduto');\"><img src=\"imagens/comprar.gif\" border=\"0\"></a></p>";
    }
}
