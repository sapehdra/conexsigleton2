<?php
use App\Read\Visualizar;
$listaDeIdioma = new Visualizar("Idioma");
$idiomas = $listaDeIdioma->buscarTodos(1);
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
    <th>Idioma</th>
    <th>Última Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($idiomas as $idioma) {
        echo "<tr>";
        echo "<td>{$idioma['idioma_id']}</td>";
        echo "<td>{$idioma['nome']}</td>";
        echo "<td>{$idioma['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=idioma&id='.$idioma['idioma_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=idioma&id='.$idioma['idioma_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>