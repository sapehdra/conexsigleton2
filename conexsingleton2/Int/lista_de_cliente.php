<?php  

use App\Read\Visualizar;

$listaDeCliente = new Visualizar("Cliente");
$clientes = $listaDeCliente->buscarTodos(1);
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
    <th>Loja</th>
    <th>Nome do Cliente</th>
    <th>E-mail</th>
    <th>Endereço</th>
    <th>Ativo</th>
    <th>Data da Criação</th>
    <th>Última Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($clientes as $cliente) {
        echo "<tr>";
        echo "<td>{$cliente['cliente_id']}</td>";
        echo "<td>{$cliente['loja_id']}</td>";
        echo "<td>{$cliente['primeiro_nome']} {$cliente['ultimo_nome']}</td>";
        echo "<td>{$cliente['email']}</td>";
        echo "<td>{$cliente['endereco_id']}</td>";
        echo "<td>{$cliente['ativo']}</td>";
        echo "<td>{$cliente['data_criacao']}</td>";
        echo "<td>{$cliente['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=cliente&id='.$cliente['cliente_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=cliente&id='.$cliente['cliente_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>