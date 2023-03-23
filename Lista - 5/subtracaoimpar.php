<html>
    <head>
        <title>Página subtracaoimpar2.php </title>
    </head>
<body>
<br>
<?php
        $valor1 = $_POST['txta'];
        $valor2 = $_POST['txtb'];

        if($valor2 < $valor1){

            for($i = $valor1; $i >= $valor2; $i--)
            {
                if($i %2 != 0)
				{
                	echo $i. '<br>';
					
                }
            }
        }

        else {
            for($i = $valor2; $i >= $valor1; $i--)
			    {

                    if($i % 2 !=0)
					{
                       echo $i. '<br>';
                       
                    }
                }
        }
         

        ?>
</body>
</html>