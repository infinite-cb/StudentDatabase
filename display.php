<?php
include 'con1.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>crud</title>
</head>
<body>
    <div class="container " style="background-color:white">
        <h3 style="padding-top:10px">Student Database</h3>
        <hr>
        <a href="login.php" class="text-white btn btn-primary" role="button" >Add Student</a> 
    <div class="container d-grid gap-30">
        <table class="table ">
  <thead>
    <tr>
      <th scope="col">Roll.No</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $sql='Select * from crud';
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $pass=$row['password'];
        echo '<th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$pass.'</td> 
        <td><a href="update.php?updateid='.$id.'" class="btn btn-secondary">Update</a>
            <a href="delete.php?deleteid='.$id.'"class="btn btn-danger">delete</a></td>
        </tr>';
       }
        
    }else{
        echo "error".mysqli_error($con);
    }
   
    ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div>
</div>

    
</body>
</html>