<?php
$host='localhost:4306';
$user='root';
$pass='';
$db='crudoperation';
$con=mysqli_connect($host,$user,$pass,$db);
if(!$con){
    echo "Not Coonected".mysqli_error();
}
?>