<html>
    <head>
        <title>Página verificarmes.php </title>
</head>
<body>
<br>
    <?php
    $mes = $_POST['txtnum'];
    switch ( $mes ){
    case 1:
    echo "Este valor é referente ao mês de JANEIRO";
    break;
    case 2:
    echo "Este valor é referente ao mês de FEVEREIRO";
    break;
    case 3:
    echo "Este valor é refente ao mês de MARÇO";
    break;
    case 4:
    echo "Este valor é referente ao mês de ABRIL";
    break;
    case 5:
    echo "Este valor é referente ao mês de MAIO";
    break;
    case 6:
    echo "Este valor é referente ao mês de JUNHO";
    break;
    case 7:
    echo "Este valor é referente ao mês de JULHO";
    break;
    case 8:
    echo "Este valor é referente ao mês de AGOSTO";
    break;
    case 9:
    echo "Este valor é referente ao mês de SETEMBRO";
    break;
    case 10:
    echo "Este valor é referente ao mês de OUTUBRO";
    break;
    case 11:
    echo "Este valor é referente ao mês de NOVEMBRO";
    break;
    case 12:
    echo "Este valor é referente ao mês de DEZEMBRO";
    break;
    default:
    echo "Este valor não é referente a nenhum mês.";
    }
    ?>
</body>
</html>