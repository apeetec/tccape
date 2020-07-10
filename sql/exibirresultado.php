<?php

//isso aqui é pra exibir as solicitações, eu ainda estou mexendo nele
require_once('../conexao.php');

$tipo = $_REQUEST['TIPO'];
// se der errado no código altere o "resultado2" para "resultado"
$sql = "SELECT * FROM objeto ORDER BY $tipo";
$resultado2 = mysqli_query($conexao, $sql);
echo "<tr>
        <th>ID</th><th>Data resgistro</th><th>Hora resgistro</th><th>Categoria</th><th>ID responsavel</th>
    </tr>";
while ($fetch = mysqli_fetch_row($resultado2)) {
    echo "<tr>";
    foreach ($fetch as $value) {
        echo '<td>' . $value . "</td>";
    }
    echo "<td><button value='$fetch[0]' onclick='deletee(this.value)'>X</button></td>";
    echo "<td><button value='$fetch[0]' onclick='atualizar_objeto(this.value)'>+</button></td>";
    echo "</tr>";
}
