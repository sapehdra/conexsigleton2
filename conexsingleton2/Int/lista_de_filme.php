<?php
use App\Read\Visualizar;
$listaDeFilmes = new Visualizar("Filme");
$filmes = $listaDeFilmes->buscarTodos(1);
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
    <th>Titulo</th>
    <th>Breve sinópse</th>
    <th>Ano de Lançamento</th>
    <th>Idioma</th>
    <th>Duração da Locação</th>
    <th>Preço da locação</th>
    <th>Duração do Filme</th>
    <th>Custo de Substituicao</th>
    <th>Classificação</th>
    <th>Extras</th>
    <th>Atualização</th>
    <th>Ações</th>
    </thead>
    <tbody>

    <?php
    foreach ($filmes as $filme) {
        echo "<tr>";
        echo "<td>{$filme['filme_id']}</td>";
        echo "<td>{$filme['titulo']}</td>";
        echo "<td>{$filme['descricao']}</td>";
        echo "<td>{$filme['ano_de_lancamento']}</td>";
        echo "<td>{$filme['idioma_id']}</td>";
        echo "<td>{$filme['duracao_da_locacao']}</td>";
        echo "<td>{$filme['preco_da_locacao']}</td>";
        echo "<td>{$filme['duracao_do_filme']}</td>";
        echo "<td>{$filme['custo_de_substituicao']}</td>";
        echo "<td>{$filme['classificacao']}</td>";
        echo "<td>{$filme['recursos_especiais']}</td>";
        echo "<td>{$filme['ultima_atualizacao']}</td>";
        echo "<td>";
        echo '<a href="excluir.php?p=filme&id='.$filme['filme_id'].'&acao=apagar" />Excluir</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="editar.php?p=filme&id='.$filme['filme_id'].'" />editar</a>';
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>

</html>