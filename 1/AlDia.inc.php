Al dia<br>
<input type="hidden" name="id" value=""/> <br>
<!-- Nombre Completo -->
<input type="hidden" name="nombrecompleto" value="<?php echo $nombrecompleto;?>" required/> <br>
Certificado de nacimiento
<input type="text" name="cnacimiento" value="<?php echo $cnacimiento;?>" /><br>
Carnet de identidad
<input type="text" name="cidentidad" value="<?php echo $cidentidad;?>" /><br>
<!-- <input type="checkbox" name="cidentidad" id="ci"/> <br>
<label><?php echo $cidentidad;?></label> -->
<!-- <?php echo $proceso?> -->
<table>
    <tr>
        <th>Nombre Completo</th>
        <th>Certificado de nacimiento</th>
        <th>Carnet de identidad</th>
    </tr>
    <tr>
        <td><?php echo $nombrecompleto;?></td>
        <td>
        <?php 
            if($cnacimiento==""){
                echo "No tiene";
                $proceso="P5";
                $procesoanterior="P3";

            }
            else{
                echo "Tiene";
            }
        ?>
        </td>
        <td>
        <?php 
            if($cidentidad==""){
                echo "No tiene";
            }
            else{
                echo "Tiene";
            }
        ?>
        </td>
    </tr>
</table>