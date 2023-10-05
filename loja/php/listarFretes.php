<?php

include "conectar.php";

echo "FRETE: <select name=\"local\" onChange=\"javascript:Loja('frete', this.options[this.selectedIndex].value);\">";

echo "<option> Escolha o local de entrega</option>\n";

$result = mysqli_query($conn, "SELECT distinct(local) FROM frete ORDER BY local");

for ($i = 0; $i < mysqli_num_rows($result); $i++) {
    $dados = mysqli_fetch_row($result);
    $local = $dados[0];

    echo "<option ";

    if ($local == $localFrete) {
        echo "selected";
        echo "value=\"$local\">$local</option>\n";
    }

    echo "</select>";
}