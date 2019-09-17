<?php
global $elemento;
use App\Delete\Deletar;
$apagarLoja = new Deletar("Loja", $elemento);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Conexsingleton2 :: <?php echo ucfirst($pagina);  ?> - Apagar</title>
</head>

<body>
    <?php
        echo $apagarLoja;
    ?>
    <a href="./index.php">Voltar para a página inicial</a>
</body>

</html>