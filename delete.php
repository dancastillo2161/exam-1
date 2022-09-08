<?php
include 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "delete from `applicant_table` where id=$id";
    $result=mysqli_query($link,$sql);
    if($result){
        //echo "deleted succesfully";
        header('location:welcome.php');
    }
}

?>