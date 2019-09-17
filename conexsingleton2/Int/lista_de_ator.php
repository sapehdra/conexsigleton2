<?php
use App\Read\Visualizar;
$listaDeAtores = new Visualizar("ator");
$atores = $listaDeAtores->buscarTodos(1);
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
    <th>Ações</th>
    </thead>
    <tbody>
        
    <?php
    foreach ($atores as $ator) {
        echo "<tr>";
        echo "<td>{$ator['ator_id']}</td>";
        echo "<td>{$ator['primeiro_nome']} {$ator['ultimo_nome']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=ator&id='.$ator['ator_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=ator&id='.$ator['ator_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>