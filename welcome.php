<?php
// Initialize the session
session_start();

include 'config.php';
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
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
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Applicant Table.</h1>
    

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Gender</th>
      <th scope="col">Cellphone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
     
    
    </tr>

    
  </thead>

  <?php

$sql="select * from `applicant_table` ";
$result=mysqli_query($link,$sql);
if($result){
	while($row=mysqli_fetch_assoc($result)){
	$id=$row['id'];
	$first_name=$row['first_name'];
    $middle_name=$row['middle_name'];
    $last_name=$row['last_name'];
    $birthdate=$row['birthdate'];
    $gender=$row['gender'];
    $cellphone_no=$row['cellphone_no'];
    $address=$row['address'];
  


    echo '<tr>
	<th scope="row">'.$id.'</th>
	<td>'.$first_name.'</td>
	<td>'.$middle_name.'</td>
	<td>'.$last_name.'</td>
	<td>'.$birthdate.'</td>
	<td>'.$gender.'</td>
	<td> '.$cellphone_no.'</td>
	<td>'.$address.'</td>
	

	<td>
    <button class=" btn btn-primary"> <a href="update.php? updateid='.$id.'"class="text-light">update</a></button>
	<button class= "btn btn-danger"> <a href="delete.php? deleteid='.$id.'"class="text-light">delete</a></button>
</td>
  </tr>';

    }
	
}

?>

</body>
</html>