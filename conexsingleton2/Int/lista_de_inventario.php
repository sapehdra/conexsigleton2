<?php
use App\Read\Visualizar;
$listaDeInventario = new Visualizar("Inventario");
$inventarios = $listaDeInventario->buscarTodos(1);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Conexsingleton2 :: <?php echo ucfirst($pagina);  ?> - Listar</title>
</head>

<body>
<table border="1">
    <thead>
    <th>Código</th>
    <th>Filme</th>
    <th>Loja</th>
    <th>Última Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($inventarios as $inventario) {
        echo "<tr>";
        echo "<td>{$inventario['inventario_id']}</td>";
        echo "<td>{$inventario['filme_id']}</td>";
        echo "<td>{$inventario['loja_id']}</td>";
        echo "<td>{$inventario['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=inventario&id='.$inventario['inventario_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=inventario&id='.$inventario['inventario_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>