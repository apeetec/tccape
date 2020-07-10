<?php

require_once('../conexao.php');


$id = $_REQUEST['CodUsuarioSolicitacao'];

$sql = "SELECT * FROM tbsolicitacao WHERE CodUsuarioSolicitacao = $id";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_affected_rows($conexao);

if ($linhas <= 0) {
    echo "Nenhum resultado encontrado!";
} else {
    echo "<tr>
            <th>ID</th><th>Data resgistro</th><th>Hora resgistro</th><th>Categoria</th><th>Descricao</th><th>Marca</th><th>RM do aluno</th>
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
