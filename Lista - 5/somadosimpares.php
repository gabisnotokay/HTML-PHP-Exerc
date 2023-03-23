<html>
    <head>
        <title>Página somadosimpares.php </title>
    </head>
<body>
<br>
        <?php
        $valorinicial = $_POST['txta'];
        $valorfinal = $_POST['txtb'];
        $resultado = 0;

        if($valorinicial < $valorfinal){

            for($i = $valorinicial; $i <= $valorfinal; $i++)
            {
                if($i %2 != 0)
				{
                	echo $i. '<br>';
					$resultado += $i;
                }
            }
        }

        else {
            for($i = $valorfinal; $i <= $valorinicial; $i++)
			    {

                    if($i % 2 !=0)
					{
                       echo $i. '<br>';
                 	   $resultado += $i;
                    }
                }
        }
         
        echo "O valor inicial foi: ".$valorinicial . " valor final: ".$valorfinal . " e a soma dos ímpares entre eles: ".$resultado .'<br>';

        ?>
</body>
</html> 