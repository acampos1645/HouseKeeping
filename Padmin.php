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
    <style>
      #contenido{
        margin:0 auto;
        width: 600px;
      }
      table{
        text-align: center;
        color: white;
        background-color: #18243a;
      }
    </style>
</head>

<body>
  <?php
  include("Pheader.php");
  ?>
  <div id="contenido">
    <table width="400" align="center">
      <tr>
      <td colspan="6"><h1>ADMINISTRACION DE REGISTRO</h1><br></td>
      </tr>
      <tr>
        <td colspan="6"><a href="Pagregar.php"><h3 style= "color:white";>AGREGAR REGISTRO</h3></a></td>
      </tr>
      <tr>
            <td colspan="6"><a href="Pmodificar.php"><h3 style= "color:white";>MODIFICAR REGISTRO</h3></a></td>
      </tr>
      <tr>
        <td colspan="6"><a href="Pborrar.php"><h3 style= "color:white";>ELIMINAR REGISTRO</h3></a></td>
      </tr><br>
    </table>
  </div>
  <?php
  include("Pfooter.php");
  ?>
</body>

</html>