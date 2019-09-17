<?php
use App\Read\Visualizar;
$listaDePais = new Visualizar("Pais");
$paises = $listaDePais->buscarTodos(1);
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
    <th>Países</th>
    <th>Última Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($paises as $pais) {
        echo "<tr>";
        echo "<td>{$pais['pais_id']}</td>";
        echo "<td>{$pais['pais']}</td>";
        echo "<td>{$pais['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=pais&id='.$pais['pais_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=pais&id='.$pais['pais_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>