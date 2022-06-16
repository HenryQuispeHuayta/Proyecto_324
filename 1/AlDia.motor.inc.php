<?php
session_start();
$cnacimiento=$_GET["cnacimiento"];
$cidentidad=$_GET["cidentidad"];
$proceso=$_GET["proceso"];
$procesoanterior=$_GET["procesoanterior"];

$sql="update Alumno set ";
$sql.="cnacimiento='$cnacimiento', cidentidad='$cidentidad' ";
$sql.="where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
?>