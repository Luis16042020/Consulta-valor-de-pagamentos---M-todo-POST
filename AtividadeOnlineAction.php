<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Atividade Online</title>
</head>
<body>
    <div class = "w3-container w3-teal w3-card">
    <h1 class = "w3-margin">
    <?php
    $nome = $_POST['txtNome'];
    $valorcompra = $_POST['txtValorCompra'];
    $pagamento = $_POST['cmbPag'];
    $por = ($valorcompra * 0.1);
    $por2 = ($valorcompra * 0.08);
    ?>

    <?php
    if ($_POST['cmbPag'] == "deposito") {
        echo "Promoção do mês de aniversário! <br>";
        echo $nome. "! <br>";
        echo "Valor da compra sem desconto: R$" .$valorcompra. "<br>";
        echo "Forma de pagamento escolhida: Depósito <br>";
        echo "Desconto de 10% <br>";
        echo "Você economizou: R$" .($valorcompra * 0.1). "<br>";
        echo "Valor da compra: R$ " .($valorcompra - $por); 
    }
    elseif ($_POST['cmbPag'] == "boleto"){
        echo "Promoção do mês de aniversário! <br>";
        echo $nome. "! <br>";
        echo "Valor da compra sem desconto: R$" .$valorcompra. "<br>";
        echo "Forma de pagamento escolhida: Boleto <br>";
        echo "Desconto de 8% <br>";
        echo "Você economizou: R$" .($valorcompra * 0.08). "<br>";
        echo "Valor da compra: R$ " .($valorcompra - $por2);
    }
    elseif ($_POST['cmbPag'] == "cartaoCredito"){
        echo "Descrição da compra: <br>";
        echo $nome. "<br>";
        echo "Valor da compra: R$" .$valorcompra. "<br>";
        echo "Forma de pagamento escolhida: Cartão de Crédito <br>";
    }
    ?>
    <h1>
    </div>
</body>
</html>