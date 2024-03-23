<?php 
require_once "Connect.php";
$sql="select * from registro";
$result=mysqli_query($mysqli, $sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="\EstiloH.css" rel="stylesheet" type="text/css" media="screen"/>
  <title>Housekeeping SBJ</title>
</head>

<body>
  <?php
  include("Pheader.php");
  ?>
  <div id="contenido">
    <table width="600" align="center">
      <tr>
      <td colspan="6"><h1>Nuevo Registro</h1><br><br></td>
      </tr>

      <FORM ACTION="FunProceso.php"> 
        <table width="600" align="center"> 
          <TR> 
            <TD>Lugar:</TD> 
            <TD><INPUT TYPE="text" NAME="lugar" SIZE="50" MAXLENGTH="100"></TD> 
          </TR> 
          <TR> 
            <TD>Unidad:</TD> 
            <TD><INPUT TYPE="text" NAME="unidad" SIZE="10" MAXLENGTH="100"></TD> 
          </TR> 
          <TR> 
            <TD>Fecha:</TD> 
            <TD><INPUT TYPE="date" NAME="fecha" SIZE="10" MAXLENGTH="5"></TD> 
          </TR> 
          <TR> 
            <TD>Monto:</TD> 
            <TD><INPUT TYPE="number" NAME="monto" SIZE="10" MAXLENGTH="10"></TD> 
          </TR> 
          <TR> 
            <TD>Qty:</TD> 
            <TD><INPUT TYPE="text" NAME="qty" SIZE="5" MAXLENGTH="10"></TD> 
          </TR> 
          <TR> 
            <TD>Descripcion:</TD> 
            <TD><INPUT TYPE="text" NAME="descripcion" SIZE="50" MAXLENGTH="10"></TD> 
          </TR> 
        </table> <br>
        <INPUT TYPE="submit" NAME="accion" VALUE="AGREGAR"> 
      </FORM> 

    </table>
  </div>
  <?php
  include("Pfooter.php");
  ?>
</body>

</html>