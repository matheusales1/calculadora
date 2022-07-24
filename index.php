<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="juros_compostos.php" method="post">
        <h1>Calculadora de juros compostos</h1>
        <label>
           <h2>Valor Inicial</h2>

           <input type="number" name="investimento_inicial">
        </label>

        <label>
            <h2>Taxa de juros %</h2>
        <input type="number" name="taxa_de_juros">
        </label>

        <label>
            <h2>Periodo em anos</h2>
        <input type="number" name="anos">
        </label> <br><br>

        <input type="submit" value="Calcular">

    </form>
    <p></p>
    
</body>
</html>