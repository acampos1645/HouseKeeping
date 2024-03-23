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
  <link href="\Housekeeping\EstiloH.css" rel="stylesheet" type="text/css" media="screen" >
  <title>HouseKeeping</title>
</head>

<body>

  <?php
  include("Pheader.php");
  ?>
  <div>
    <h1>Nuevo registro</h1>
  </div>

  <?php
  include("Pfooter.php");
  ?>
</body>

</html>