<html>
    <head>
        <title>Página salario.php </title>
    </head>
<body>
<br>
        <?php
        $sb = $_POST['txta'];
        $sl = 0;
        $gt = 0.1;
        $dc = 0.2;
        $resultado;

        $sl = $sb + ($gt * $sb);

        echo "O seu salário com gratificação é de: ".$sl .'<br />';

        $resultado = $sl - ($sl * $dc);

        echo "O seu salário com  imposto de renda é de: ".$resultado .'<br />';

        ?>
</body>
</html> 