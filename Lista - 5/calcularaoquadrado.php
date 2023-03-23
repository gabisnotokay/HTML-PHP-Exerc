<html>
    <head>
        <title>Página calcularaoquadrado.php </title>
    </head>
<body>
<br>
        <?php
        $A = $_POST['txta'];
        $B = $_POST['txtb'];
        $C = $_POST['txtc'];
        $Resultado = ($A * $A) + ($B * $B) + ($C * $C);

        echo "A soma dos valores ao  quadrado é de: ".$Resultado .'<br />';
        ?>
</body>
</html> 