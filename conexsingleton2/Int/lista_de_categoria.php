<?php
use App\Read\Visualizar;
$listaDeCategoria = new Visualizar("categoria");
$categorias = $listaDeCategoria->buscarTodos(1);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Conexãosingleton2 :: <?php echo ucfirst($pagina);  ?> - Listar</title>
</head>

<body>
<table border="1">
    <thead>
    <th>Código</th>
    <th>Nome</th>
    <th>Última Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($categorias as $categoria) {
        echo "<tr>";
        echo "<td>{$categoria['categoria_id']}</td>";
        echo "<td>{$categoria['nome']}</td>";
        echo "<td>{$categoria['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=categoria&id='.$categoria['categoria_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=categoria&id='.$categoria['categoria_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>