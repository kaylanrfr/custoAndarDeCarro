<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="/retorno.php" method="post">
        <label for="fname">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="">
        <label for="fname">Km por litro:</label>
        <input type="text" id="kmlitro" name="kmlitro" value="">
        <label for="fname">Distância:</label>
        <input type="text" id="kmdis" name="kmdis" value="">
        <label for="fname">Preço gasolina:</label>
        <input type="text" id="gas" name="gas" value="">
        <input type="submit" value="Submit">
    </form>
    <?php
    session_start();
    if (isset($_SESSION["print"]))
    {
        echo $_SESSION["print"];
        session_destroy();
    }
    
    ?>



</body>


</html>