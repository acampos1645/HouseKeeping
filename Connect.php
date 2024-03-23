<?php
$mysqli = new mysqli("localhost","root","","housekeeping");
if(mysqli_connect_errno()){
printf("Conexión fallida", mysqli_connect_error());
}