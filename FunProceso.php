<!--Aca se procesa el guardado de la informacion de nuevos registros en la BD-->
<!--FALTA REALIZAR COMPROBACION DE QUE NO EXISTAN LOS DATOS AUN EN LA BD-->
<?php 
  require_once "Connect.php";
  $lugar=$_GET['lugar']; 
  $unidad=$_GET['unidad']; 
  $fecha=$_GET['fecha']; 
  $monto=$_GET['monto']; 
  $qty=$_GET['qty'];
  $descripcion=$_GET['descripcion'];
  $mysqli ->query("INSERT INTO registro(lugar, unidad, fecha, monto, qty, descripcion) VALUES('$lugar', '$unidad', '$fecha','$monto','$qty','$descripcion')");
  header("Location: Pagregar.php"); 
?> 