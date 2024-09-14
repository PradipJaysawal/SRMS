<?php
session_start();
if(isset($_POST['store']))
{

// $studentid = $_POST['studentid'];
$image = $_POST['image'];
$description = $_POST['description'];
//validation cheack................................................
 $qrycheck = "SELECT * FROM studentinfo WHERE grade=$grade";
 include '../includes/dbconnection.php';
 $resultcheck=mysqli_query($conn,$qrycheck);
 include '../includes/closeconnection.php';
 if(mysqli_num_rows($resultcheck)> 0){
     $_SESSION['msg'] = "Grade already exist";
     echo '<script> window.history.back();</script>';
     exit();
     }
// ............................................................
$qry = "INSERT INTO classroom (image,description) VALUES 
('$image','$description')";

include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
if($result){
    $_SESSION['msg'] = "Added successfully";
    header('location: classroom.php');
}else{
    echo "error Adding ";
}
include '../includes/closeconnection.php';
}

//update......................................................

if(isset($_POST['update']))
{
    $id=$_POST['categoryid'];
    // $studentid = $_POST['studentid'];
    $image = $_POST['image'];
    $description = $_POST['description'];

    $qry="UPDATE classroom SET image = '$image',description = '$description' WHERE id=$id";
    include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
if($result){
    $_SESSION['msg'] = "Updated successfully";
    header('location: classroom.php');
}else{
    echo "error updating ";
}
include '../includes/closeconnection.php';
}

//delete..............................................................
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $qry="DELETE FROM classroom WHERE id=$id";

    include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
if($result){
    $_SESSION['msg'] = "Deleted successfully";
    header('location: classroom.php');
}else{
    echo "error deleting ";
}
include '../includes/closeconnection.php';
} 
?>
