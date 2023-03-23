<html>
    <head>
        <title>Página quatronotas2.php </title>
    </head>
<body>
<br>
    <?php
        $nota1 = $_POST['txtn1'];
        $nota2 = $_POST['txtn2'];
        $nota3 = $_POST['txtn3'];
        $nota4 = $_POST['txtn4'];
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo "Sua média aritmética é de: ".$media .'<br />';

        if($media < 3)
        {
            echo "Você está retido(a).";
        } 
            if ($media >= 3 && $media < 6) 
            {
                echo "Você foi convodado(a) para um exame."; 
            }
                if ($media > 6)
                {
                    echo "Parabéns, você foi aprovado(a)!!"; 
                }
                    if ($media > 10)
                    {
                        echo "Nota inválida, tente novamente."; 
                    }

        
    ?>
</body>
</html>