<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .caja{

            width:200px;
            height:300px;
            background-color:#ccc;
            margin:10px;
            float:left;
            overflow:hidden;
        }

        p{
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #f0e1b5
        }

    </style>

</head>
<body>
    
<form action="tabla.php" method="post">
    
    <label for="numero"> escriba un numero para calcular su tabla </label>
    
    <input type="text" name="numero" id="numero">
    
    <input type="submit" name="enviar" id="enviar" value="enviar">

</form>

<?php

if(isset($_POST["enviar"]) && !empty($_POST["num"])){
    
    $cont = 0;

    $num = $_POST["num"];

    while($cont <=10){

        $resultado =$cont*$num;

    echo  "<p>";

    echo "$cont x $num = $resultado";

    echo "</p>";

        $cont++;

    }

}else{
    echo "complete el formulario";
}

?>

</body>
</html>