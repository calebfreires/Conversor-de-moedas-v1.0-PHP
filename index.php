<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Dólar v1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            // pegando o number do input number do html por meio de um método http
            $number = $_GET["number"] ?? 0;
            $cotation = 5.17;
            $dolarValue = $number / $cotation;

            $formatedNumber = number_format($dolarValue, 2);

            echo "<p>Seus R$$number equivalem a <strong>$$formatedNumber</strong></p>";
        ?>
        <p>*<strong>Cotação fixa de $5,17 </strong>informada diretamente no código</p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>