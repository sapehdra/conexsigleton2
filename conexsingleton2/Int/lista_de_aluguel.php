<?php  

use App\Read\Visualizar;

$listadealuguel = new Visualizar("Aluguel");
$alugueis = $listadealuguel->buscarTodos(1);
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Conexsigleton2 :: <?php echo ucfirst($pagina);  ?> - Listar</title>
</head>

<body>
<table border="1">
    <thead>
    <th>Código</th>
    <th>Cliente</th>
    <th>Data do Aluguel</th>
    <th>Data de Devolução</th>
    <th>Inventário</th>
    <th>Funcionário</th>
    <th>Última Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($alugueis as $aluguel) {
        echo "<tr>";
        echo "<td>{$aluguel['aluguel_id']}</td>";
        echo "<td>{$aluguel['cliente_id']}</td>";
        echo "<td>{$aluguel['data_de_aluguel']}</td>";
        echo "<td>{$aluguel['data_de_devolucao']}</td>";
        echo "<td>{$aluguel['inventario_id']}</td>";
        echo "<td>{$aluguel['funcionario_id']}</td>";
        echo "<td>{$aluguel['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=aluguel&id='.$aluguel['aluguel_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=aluguel&id='.$aluguel['aluguel_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>