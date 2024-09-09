<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de empréstimo</title>
</head>
<body>

    <h2> Seja bem vindo ao MyBank </h2>
    <h3> SIMULADOR DE EMPRÉSTIMOS  </h3>

    <form action="calcular.php" method="post">

        <label for="nome"> Nome: </label>
        <input type="text" name="nome" id="nome">
        
        <br><br>

        <label for="cliente"> Já é nosso cliente: </label>
        <input type="radio" name="cliente" value="s" id="" checked> Sim
        <input type="radio" name="cliente" value="n" id=""> Não

        <br><br>

        <label for="score"> Digite seu Serasa Score: </label>
        <input type="number" name="score" id="score" value="100">
        
        <br><br>

        <label for="valor"> Valor do empréstimo (R$): </label>
        <input type="number" name="valor" id="valor" value="0">
        
        <br><br>

        <label for="parcelas"> Quantidade de parcelas </label>
            <select name="parcelas" id="parcelas">
                <option value="1"> selecione </option>
                <option value="3"> 3 </option>
                <option value="6"> 6 </option>
                <option value="12"> 12 </option>
                <option value="18"> 18 </option>
                <option value="24"> 24 </option>
            </select>
        
        <br><br>

        <input type="checkbox" name="seguro" id="seguro">
        <label for="seguro"> Desejo incluir seguro desemprego no valor de R$ 49,90. </label>
        
        <br><br>

        <input type="submit" value="Simular seu empréstimo!" >

    </form>
    
</body>
</html>