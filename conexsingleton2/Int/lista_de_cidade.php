<?php
use App\Read\Visualizar;
$listaDeCidade = new Visualizar("cidade");
$cidades = $listaDeCidade->buscarTodos(1);
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
    <th>País</th>
    <th>Última Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($cidades as $cidade) {
        echo "<tr>";
        echo "<td>{$cidade['cidade_id']}</td>";
        echo "<td>{$cidade['cidade']}</td>";
        echo "<td>{$cidade['pais_id']}</td>";
        echo "<td>{$cidade['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=cidade&id='.$cidade['cidade_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=cidade&id='.$cidade['cidade_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>