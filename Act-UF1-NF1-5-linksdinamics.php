<html>
<head>
</head>
<body>
Entra el número de links que vols crear:
<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
    <input type='text' name='numero'
    <?php if(isset($_REQUEST['numero'])) echo " value= ".$_REQUEST['numero']." ";
    ?>

    >
    <input type='submit' name='enviar'>
</form>

<?php

if(isset($_REQUEST['numero']))
{
    $numero = $_REQUEST['numero'];
    for($i=1; $i <= $numero; $i++) {
        echo "<a href='".$_SERVER['PHP_SELF']."?numero=".
            $numero."&n=".$i."'>pagina ".$i."</a><br>";
    }
}

if(isset($_GET['n']))
{
    echo "<br>Has fet click sobre enllaç ". $_GET['n'];
}

?>
</body>
</html>