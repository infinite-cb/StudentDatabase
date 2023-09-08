<?php
include 'con1.php';
if(isset($_POST['submit'])){
    $roll=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    
    $sql="Insert into crud values('$roll','$name','$email','$pass');";
    if(mysqli_query($con,$sql)){
        header ('location:display.php');
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
    <div class="container  " style="min-height: 500px;  ">
          <div class="row ">
            
            <div class="col-sm-6 box " style="margin-top: 80px; background-color:#fff;">
                <form method="post" >
                    <div class="text-center">
                    <h3 class="text-primary">Student Details</h3>
                    <hr>
                </div>
                    <table style="letter-spacing: 2px;line-height-step: 30px;">
        
                        <tr>
                            <td>ROLL.NO:</td>
                            <td><input type="text" name="id"></td>
                        </tr>
                        <tr>
                            <td>NAME:</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>EMAIL:</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td>MOBILE NO:</td>
                            <td><input type="password" name="password"></td>
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