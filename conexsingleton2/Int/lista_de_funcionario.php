<?php
use App\Read\Visualizar;
$listaDeFuncionario = new Visualizar("Funcionario");
$funcionarios = $listaDeFuncionario->buscarTodos(1);
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
    <th>Nome</th>
    <th>Endereço</th>
    <th>Foto</th>
    <th>E-mail</th>
    <th>Loja</th>
    <th>Ativo</th>
    <th>Usuário</th>
    <th>Senha</th>
    <th>Última Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($funcionarios as $funcionario) {
        echo "<tr>";
        echo "<td>{$funcionario['funcionario_id']}</td>";
        echo "<td>{$funcionario['primeiro_nome']} {$funcionario['ultimo_nome']}</td>";
        echo "<td>{$funcionario['endereco_id']}</td>";
        echo "<td>{$funcionario['foto']}</td>";
        echo "<td>{$funcionario['email']}</td>";
        echo "<td>{$funcionario['loja_id']}</td>";
        echo "<td>{$funcionario['ativo']}</td>";
        echo "<td>{$funcionario['usuario']}</td>";
        echo "<td>{$funcionario['senha']}</td>";
        echo "<td>{$funcionario['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=funcionario&id='.$funcionario['funcionario_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=funcionario&id='.$funcionario['funcionario_id'].'" />Editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>