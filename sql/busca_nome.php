<?php

require_once('../conexao.php');


$nome = $_REQUEST['Nome'];

$sql = "SELECT * FROM objeto WHERE Nome = '$nome'";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_affected_rows($conexao);
// echo $sql;
// exit();

if ($linhas <= 0) {
    echo "Nenhum resultado encontrado!";
} else {
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
}
