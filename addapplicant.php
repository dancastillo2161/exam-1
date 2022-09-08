<?php
include 'config.php';
if(isset($_POST['submit'])){
	  $first_name=$_POST['first_name'];
    $middle_name=$_POST['middle_name'];
    $last_name=$_POST['last_name'];
    $birthdate=$_POST['birthdate'];
    $gender=$_POST['gender'];
    $cellphone_no=$_POST['cellphone_no'];
    $address=$_POST['address'];
    
    $sql = "insert into `applicant_table`( first_name, middle_name , last_name, birthdate, gender, cellphone_no, address) 
    values ('$first_name','$middle_name','$last_name','$birthdate','$gender','$cellphone_no','$address')";
   
   $result=mysqli_query($link,$sql);
   if($result) {
   // echo "zzzz";
   header('location:welcome.php');
   }
   else{
    die(mysqli_error($link));
   }
  
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Add Applicant</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand text-light " href="welcome.php">Dante Exam</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
      <a class="font-weight-bold nav-link text-light" href="welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="font-weight-bold nav-link text-light" href="addapplicant.php">Add Applicant</a>
      </li>
     

    </ul>
    <form class="form-inline my-2 my-lg-0">
     
    <a href="reset-password.php" class="font-weight-bold nav-link text-light my-2 my-sm-0" >Reset Your Password</a>
    </form>
    <form class="form-inline my-2 my-lg-0">
     
    <a class="font-weight-bold nav-link text-light" href="logout.php">Logout</a>
    </form>
  </div>
</nav>
<br>

<div  class="container">
    <div>
    <form method="post">
    <h1>Add Applicant Here</h1>
    <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="" name="first_name">
    
  </div>

  <div class="form-group">
    <label >Middle Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="middle_name">
  </div>

  <div class="form-group">
    <label >Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="last_name">
  </div>

  <div class="form-group">
    <label >Birth Date</label>
    <input type="Date" class="form-control" id="exampleInputPassword1" placeholder=""name="birthdate">
  </div>

  <div class="form-group">
    <label >Gender</label>
    <select name="gender" id="Gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>
  </div>

  <div class="form-group">
    <label >Cellphone Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""name="cellphone_no">
  </div>
  <div class="form-group">
    <label >Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""name="address">
  </div>
  
  </div>

  
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  </body>
</html>