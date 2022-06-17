<?php
include "conexion.inc.php";
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$rol=$_GET["rol"];
$sql="select * from FlujoProceso where Flujo='$flujo' and Proceso='$proceso' and Rol='$rol'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
// $nom=$fila['Proceso'];
$nom=$fila['ProcesoSiguiente'];
// echo $nom;
// if($nom=="P1"){
//     $nom=$fila['ProcesoSiguiente'];
// }
?>
<br>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
    <input type="hidden" name="flujo" value="<?php echo $flujo?>">
    <input type="hidden" name="proceso" value="<?php echo $proceso?>">
    <input type="hidden" name="rol" value="<?php echo $rol?>">
    <input type="text" name="procesosiguiente" value="<?php echo $nom?>">
    <br>
    <input type="submit" name="subir" value="Subir">
    <input type="submit" name="bajar" value="Bajar">
</form>
<?php
if(isset($_GET["subir"])){
    echo $proc = $_GET["proceso"];
    $proceso=$_GET["procesosiguiente"];
    echo $proceso;
    header("Location: test.php?flujo=F1&proceso=$proceso&rol=Alumno&procesosiguiente=P2&subir=Subir");

}
if(isset($_GET["bajar"])){
    echo $proc = $_GET["procesosiguiente"];
}
// $nom = $proc;
?>