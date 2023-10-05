<?php

include "conectar.php";

$result = mysqli_query($conn, "SELECT * FROM categoria ORDER BY nomeCategoria");

for ($i = 0; $i < mysqli_num_rows($result); $i++) {
    $dados = mysqli_fetch_row($result);

    $idCategoria = $dados[0];
    $nomeCategoria = $dados[1];

    echo "<a href=\"javascript:Loja('categoria', '$idCategoria');\">$nomeCategoria</a><br>";
}
?>

<form action="javascript:void%200" onsubmit="Loja('busca', this.busca.value); return false;">
    <p>Busca <br> <input name="busca" type="text" id="busca" size="10" maxlength="100"><br><input name="ok" type="submit" id="ok" value="OK"></p>
</form>