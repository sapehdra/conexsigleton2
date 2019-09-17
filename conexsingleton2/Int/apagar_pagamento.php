<?php
global $elemento;
use App\Delete\Deletar;
$apagarPagamento = new Deletar("Pagamento", $elemento);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Conexsingleton2 :: <?php echo ucfirst($pagina);  ?> - Apagar</title>
</head>

<body>
    <?php
        echo $apagarPagamento;
    ?>
    <a href="./index.php">Voltar para a página inicial</a>
</body>

</html>