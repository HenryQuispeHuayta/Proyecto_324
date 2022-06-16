<?php
session_start();
$sql="select * from Alumno where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);

$nombrecompleto=$fila["nombrecompleto"];
$cnacimiento=$fila["cnacimiento"];
$cidentidad=$fila["cidentidad"];
// $proceso="P6";
// $procesoanterior="P3";
if($cnacimiento=="" || $cidentidad==""){
    $proceso="P5";
    $procesoanterior="P3";
}
// if($cidentidad==""){
//     $proceso="P5";
//     $procesoanterior="P3";
// }
else{
    $proceso="P6";
    $procesoanterior="P3";
}

?>