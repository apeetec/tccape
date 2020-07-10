<?php

require_once('../conexao.php');

$tipo = $_REQUEST['TIPO'];

$sql = "SELECT * FROM objeto ORDER BY $tipo";
$resultado = mysqli_query($conexao, $sql);
echo "<tr>
        <th>ID</th><th>Nome</th><th>Descrição</th><th>Categoria</th><th>Data resgistro</th><th>Hora resgistro</th><th>Situação</th><th>Imagem</th><th>ID responsavel</th><th>Excluir</th><th>Atualizar</th>
    </tr>";
while ($fetch = mysqli_fetch_row($resultado)) {
    echo "<tr>";
    foreach ($fetch as $value) {
        echo '<td>' . $value . "</td>";
    }
    echo "<td><button value='$fetch[0]' onclick='deletee(this.value)'>X</button></td>";
    echo "<td><button value='$fetch[0]' onclick='atualizar_objeto(this.value)'>+</button></td>";
    echo "</tr>";
}
