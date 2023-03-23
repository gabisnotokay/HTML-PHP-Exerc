<html>
    <head>
        <title>Página maioremenor.php </title>
    </head>
<body>
<br>
    <?php
        $a = $_POST['txtn1'];
        $b = $_POST['txtn2'];
        $c = $_POST['txtn3'];

        if($a >= $b && $b >= $c){
            echo "Maior ".$a ." e  menor: ".$c .'<br />';
        }

        else if ($a >= $c && $c >= $b){
            echo "Maior ".$a ." e  menor: ".$b .'<br />';
        }

        else if ($b >= $a && $a >= $c){
            echo "Maior ".$b ." e  menor: ".$c .'<br />';
        }

        else if ($b >= $c && $c >= $a){
            echo "Maior ".$b ." e  menor: ".$a .'<br />';
        }

        else if ($c >= $a && $a >= $b){
            echo "Maior ".$c ." e  menor: ".$b .'<br />';
        }

        else{
            echo "Maior ".$c ." e  menor: ".$a .'<br />';
        }
        
    ?>
</body>
</html>