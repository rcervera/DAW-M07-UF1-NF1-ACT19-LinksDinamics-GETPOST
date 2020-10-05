<html>
<head>
</head>
<body>
Entra el número de links que vols crear:
<form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='POST'>
    <input type='text' name='numero'
    <?php if(isset($_REQUEST['numero'])) echo " value= ".htmlspecialchars($_REQUEST['numero'])." ";
    ?>

    >
    <input type='submit' name='enviar'>
</form>

<?php

if(isset($_REQUEST['numero']))
{
    $numero = htmlspecialchars($_REQUEST['numero']);

    if(is_numeric($numero)===FALSE) {
        echo "El valor no és numèric!";
        exit;
    }

    if($numero<1 || $numero>100) {
        echo "El valor de N ha der ser un número entre 1 i 100";
        exit;
    }

    for($i=1; $i <= $numero; $i++) {
        echo "<a href='".htmlspecialchars($_SERVER['PHP_SELF'])."?numero=".
            $numero."&n=".$i."'>pagina ".$i."</a><br>";
    }
}

if(isset($_GET['n']))
{
    $n = htmlspecialchars($_GET['n']);
    echo "<br>Has fet click sobre enllaç ". $n;
}

?>
</body>
</html>