<html>
    <head>
        <title>Página valorcomdesconto.php </title>
    </head>
<body>
<br>
    <?php
        $valor = $_POST['txta'];
        $porcentagem = $_POST['txtb'];
        $resultado = $valor - ($valor * $porcentagem/100);

        echo "O valor do desconto deste produto é de ".$resultado .'<br>';
        
    ?>
</body>
</html>