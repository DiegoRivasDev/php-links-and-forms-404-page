<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario tarea 1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">


</style>

</head>
<body>

<img src="images/vscode.png" alt="vscode.png" align="left" width="60" height="60">

<h1>tarea 1</h1>

<h1>formulario de datos</h1>



<table>

<?php

$arreglo = ["Manzana", "fresas", "mango", "pera", "naranja"];

for ($i = 0; $i < 5; $i++){
    echo '<tr><td>'.$arreglo[$i].'</td></tr>';
}

?>

</table>


<form action="respuesta_formulario.php" method="post">

<h2>nombre:</h2>
<input type="text" name="nombre">
<br>

<h2>apellido:</h2>
<input type="text" name="apellido">
<br>

<h2>fecha de nacimiento:</h2>
<input type="date" name="nacimiento" max="2020">
<br>

<h2>selecione tu sexo:</h2>
<select name="sexo">
<option value="hombre">hombre</option>
<option value="mujer">mujer</option>
</select>
<br>

<h2>selecione una fruta:</h2>
<select name="frutas">
<option value="manzana">manzana</option>
<option value="fresas">fresas</option>
<option value="mango">mango</option>
<option value="pera">pera</option>
<option value="naranja">naranja</option>
</select>
<br><br>


<input type="submit" value="enviar">

</form>

<br><br><br>
<img src="images/extra.gif" alt="extra.gif" align="right">

</body>
</html>

