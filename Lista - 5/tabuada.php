<html>
    <head>
        <title> pagina tabuada.php </title>
    </head>
<body>
    <?php   
    $i = 0;
    $num = $_POST['txtnum'];

        while($i <= 10){
            $tab = $num * $i;
            
            echo $num . 'X' .$i . '=' .$tab . '<br />';
            $i++;
        }
    ?>
</body>
</html>