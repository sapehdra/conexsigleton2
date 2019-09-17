<?php
use App\Read\Visualizar;
$listaDeLoja = new Visualizar("Loja");
$lojas = $listaDeLoja->buscarTodos(1);
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
    <th>Gerente</th>
    <th>Endereço</th>
    <th>Última Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($lojas as $loja) {
        echo "<tr>";
        echo "<td>{$loja['loja_id']}</td>";
        echo "<td>{$loja['gerente_id']}</td>";
        echo "<td>{$loja['endereco_id']}</td>";
        echo "<td>{$loja['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=loja&id='.$loja['loja_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=loja&id='.$loja['loja_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>