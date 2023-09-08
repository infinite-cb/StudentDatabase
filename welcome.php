<?php
$host='localhost:4306';
$user='root';
$pass='';
$db='Student';
$con=mysqli_connect($host,$user,$pass,$db);
    if(!$con){
        echo "Not connect".mysqli_error();
    }else{
        echo "connected Succesfully";
    }
    // $sql='Create database Student';
    // if(mysqli_query($con,$sql)){
    //     echo "database created";
    // }else{
    //     echo "Not Created".mysqli_error($con);
    // }
    $table="Create Table Student(Rollno int(50) primary key, Name varchar(50) NOT NULL, email varchar(30) NOT NULL,password varchar(30)NOT NULL)";
    if(mysqli_query($con,$table)){
        echo "Table Created";
    }else{
        echo "Table Not Created".mysqli_error($con);
    }
    

?>