<?php
global $elemento;

use App\Delete\Deletar;

$apagarCategoria = new Deletar("categoria", $elemento);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Conexsigleton2 :: <?php echo ucfirst($pagina);  ?> - Apagar</title>
</head>

<body>
    <?php
        echo $apagarCategoria;
    ?>
    <a href="./index.php">Voltar para a página inicial</a>
</body>

</html>