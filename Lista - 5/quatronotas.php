<html>
    <head>
        <title>Página quatronotas.php </title>
    </head>
<body>
<br>
    <?php
        $nota1 = $_POST['txtn1'];
        $nota2 = $_POST['txtn2'];
        $nota3 = $_POST['txtn3'];
        $nota4 = $_POST['txtn4'];
        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

        echo "Sua média aritmética é de: ".$media .'<br />';

        if($media>5){
            echo "Parabéns, você foi aprovado(a)!!"; 
        }

        else{
            echo "Você foi reprovado(a).";
        }

        
    ?>
</body>
</html>