<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" type="text/css" href="style.css">


<img src="images/vscode.png" alt="vscode.png" align="left" width="60" height="60">

<h1>tarea 1</h1>

<h1>formulario de datos</h1>

<?php

@$nombr = $_POST ['nombre'];
@$apellid = $_POST ['apellido'];


@$nacimiento = $_POST ['nacimiento'];

@$sexo = $_POST ['sexo'];

@$frutas = $_POST ['frutas'];

$fecha_actual = date("Y");
@$edad = $fecha_actual-$nacimiento;

echo "<h2> Hola </h2>"; echo "<h2> $nombr </h2>"; echo " "; echo "<h2> $apellid </h2>";
echo "<br/>";

echo "<h2> tu fecha de nacimiento es </h2>"; echo "<h2> $nacimiento </h2>"; 
echo "<br/>";


echo "<h2> Edad </h2>";
if ($edad > 18) {
    echo "<h2> $edad </h2>"; echo "<h2> y eres mayor de edad </h2>";
}

elseif ($edad < 18) {
echo '<p>'.$edad.'</p>'; echo "<h2> no eres mayor de edad </h2>";

}

echo "<br/>";

echo "<h2> tu eres </h2>"; echo "<h2> $sexo </h2>";
echo "<br/>";

echo "<h2> la fruta que decidio escoger fue </h2>"; echo "<h2> $frutas </h2>";

?>

</body>
</html>