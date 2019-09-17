<?php
use App\Read\Visualizar;
$listaDePagamento = new Visualizar("Pagamento");
$pagamentos = $listaDePagamento->buscarTodos(1);
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
    <th>Cliente</th>
    <th>Funcionário</th>
    <th>Aluguel</th>
    <th>Valor</th>
    <th>Data de Pagamento</th>
    <th>Última Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($pagamentos as $pagamento) {
        echo "<tr>";
        echo "<td>{$pagamento['pagamento_id']}</td>";
        echo "<td>{$pagamento['cliente_id']}</td>";
        echo "<td>{$pagamento['funcionario_id']}</td>";
        echo "<td>{$pagamento['aluguel_id']}</td>";
        echo "<td>{$pagamento['valor']}</td>";
        echo "<td>{$pagamento['data_de_pagamento']}</td>";
        echo "<td>{$pagamento['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=pagamento&id='.$pagamento['pagamento_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=pagamento&id='.$pagamento['pagamento_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>