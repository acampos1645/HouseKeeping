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
  <title>HouseKeeping SBJ</title>
</head>

<body>

  <?php
  include("Pheader.php");
  ?>
  <div id="contenido">
    <table width="600" align="center">
      <tr>
      <td colspan="6"><h1>Historial</h1><br></td>
      </tr>
      <tr>
        <tr>
        <td align="center" bgcolor="#ff6666"><strong>Lugar</strong></td>
        <td align="center" bgcolor="#ff6666"><strong>Unidad</strong></td>
        <td align="center" bgcolor="#ff6666"><strong>Fecha</strong></td>
        <td align="center" bgcolor="#ff6666"><strong>Monto</strong></td>
        <td align="center" bgcolor="#ff6666"><strong>Descripcion</strong></td>
      </tr>
<?php
  while($DATA = mysqli_fetch_assoc($result))
  { 
?>

  <tr>
    <td><?php echo $DATA['lugar']; ?></td>
    <td><?php echo $DATA['unidad']; ?></td>
    <td><?php echo $DATA['fecha']; ?></td>
    <td><?php echo $DATA['monto']; ?></td>
    <td><?php echo $DATA['descripcion']; ?></td>
  </tr>

<?php 
  }
?>
    </table>
    
  </div>

  <?php
  include("Pfooter.php");
  ?>
</body>

</html>