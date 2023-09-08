<?php

include 'con1.php';
$id=$_GET['updateid'];
$sql="Select * from crud where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$pass=$row['password'];

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    
    $sql="update crud set id='$id',name='$name',email='$email',password='$pass' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
     header ('location:display.php');
      // echo "Update SuccesFully";
        
    }else{
        echo "Error occur".mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Simple Website!</h1>
    <h4>The Student Details:</h4>
    <hr>
    <div class="container  " style="min-height: 500px; background-color: rgb(156, 20, 214);">
          <div class="row ">
            
            <div class="col-sm-6 box img-fluid " style="margin-top: 80px;">
                <form method="post" >
                    <div class="text-center">
                    <h3 class="text-primary">Student Details</h3>
                </div>
                    <table style="letter-spacing: 2px;line-height-step: 30px;">
        
                        <tr>
                            <td>ROLL.NO:</td>
                            <td><input type="text" name="id" value="<?php echo $id?>"></td>
                        </tr>
                        <tr>
                            <td>NAME:</td>
                            <td><input type="text" name="name" value="<?php echo $name?>"></td>
                        </tr>
                        <tr>
                            <td>EMAIL:</td>
                            <td><input type="text" name="email" value="<?php echo $email?>"></td>
                        </tr>
                        <tr>
                            <td>PASSWORD:</td>
                            <td><input type="password" name="password" value="<?php echo $pass?>"></td>
                        </tr>
                       
                        <tr>
                            <td colspan="2"><input type="submit" value="Submit " name="submit" class="text-white btn btn-primary"style="width: 100%; "></td>
                        </tr>
                    </table>

                </form>
            </div>
          </div>
            
    </div>









    </div>
</body>
</html>