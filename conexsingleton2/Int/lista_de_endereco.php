<?php  

use App\Read\Visualizar;

$listaDeEndereco = new Visualizar("Endereco");
$enderecos = $listaDeEndereco->buscarTodos(1);
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
    <th>Endereço</th>
    <th>Bairro</th>
    <th>Cidade</th>
    <th>CEP</th>
    <th>Telefone</th>
    <th>Última Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($enderecos as $endereco) {
        echo "<tr>";
        echo "<td>{$endereco['endereco_id']}</td>";
        echo "<td>{$endereco['endereco']} {$endereco['endereco2']}</td>";
        echo "<td>{$endereco['bairro']}</td>";
        echo "<td>{$endereco['cidade_id']}</td>";
        echo "<td>{$endereco['cep']}</td>";
        echo "<td>{$endereco['telefone']}</td>";
        echo "<td>{$endereco['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=endereco&id='.$endereco['endereco_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=endereco&id='.$endereco['endereco_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>