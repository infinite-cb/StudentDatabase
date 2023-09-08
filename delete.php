<?php
include 'con1.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from crud where id='$id'";
    if(mysqli_query($con,$sql)){
        header ('location:display.php');
    }
}
?>