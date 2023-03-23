<html>
    <head>
        <title>Página trocavalores.php </title>
    </head>
<body>
<br>
    <?php
        $a = $_POST['txta'];
        $b = $_POST['txtb'];
        $c = 0;

        echo "Antes da troca de valores: ".$a ." e ".$b .'<br />';

        $c = $a;
        $a = $b;
        $b = $c;

        echo "Depois da troca de valores: ".$a ." e ".$b .'<br />';
        
    ?>
</body>
</html>