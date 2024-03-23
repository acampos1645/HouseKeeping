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
          <td colspan="6"><h1>NOSOTROS</h1></td>
        </tr>
        <tr>
          <td colspan="6"><p>SOMOS UNA EMPRESA DEDICADA AL DESARROLLO Y MANTENIMIENTO DE PAGINAS WEB, PROGRAMAS, BASES DE DATOS, ADEMAS DE REPARAR Y DAR MANTENIMENTO A EQUIPOS DE COMPUTO</p></td>
        </tr>
      </table>
    </div>
    <?php
    include("Pfooter.php");
    ?>
  </body>

  </html>