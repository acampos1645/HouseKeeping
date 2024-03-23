<!--PENDIENTE DE MODIFICACIONES+++++++++++++++++++++++++++++-->






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
      <td colspan="6"><h1>LISTA REGISTROS</h1></td>
      </tr>
        <tr>
        <td align="center" bgcolor="#66FFFF"><strong>Lugar</strong></td>
        <td align="center" bgcolor="#66FFFF"><strong>Unidad</strong></td>
        <td align="center" bgcolor="#66FFFF"><strong>Fecha</strong></td>
        <td align="center" bgcolor="#66FFFF"><strong>Monto</strong></td>
        <td align="center" bgcolor="#66FFFF"><strong>Qty</strong></td>
        <td align="center" bgcolor="#66FFFF"><strong>Descripcion</strong></td>
        <td colspan="2" align="center" bgcolor="#66FFFF"><strong>Accion</strong></td>
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
    <td><?php echo $DATA['qty']; ?></td>
    <td><?php echo $DATA['descripcion']; ?></td>
    <td><a href="FunModificar.php?ID=<?php echo $DATA['id_producto']; ?>">EDITAR</a></td>
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