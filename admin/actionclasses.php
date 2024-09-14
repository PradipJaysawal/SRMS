<?php
session_start();
if(isset($_POST['store']))
{
$grade = $_POST['grade'];
$num = $_POST['num'];

// validation cheack.......................
$qrycheck = "SELECT * FROM studentclasses WHERE grade = $grade";
include '../includes/dbconnection.php';
$resultcheck=mysqli_query($conn,$qrycheck);
// include '../includes/closeconnection.php';
if(mysqli_num_rows($resultcheck)> 0){
    $_SESSION['msg'] = "Grade already exist";
    echo '<script> window.history.back();</script>';
    exit();
}
// .......................
$qry = "INSERT INTO studentclasses(num, grade) VALUES ('$num', $grade)";  

include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
if($result){
    $_SESSION['msg'] = "Added successfully";
    header('location: studentclasses.php');
}else{
    echo "error Adding ";
}
include '../includes/closeconnection.php';
}

//update......................................................

if(isset($_POST['update']))
{
    $id=$_POST['categoryid'];
    $num=$_POST['num'];
    $grade=$_POST['grade'];

    $qry="UPDATE studentclasses SET num = $num, grade=$grade WHERE id=$id";
    include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
if($result){
    $_SESSION['msg'] = "Updated successfully";
    header('location: studentclasses.php');
}else{
    echo "error updating ";
}
include '../includes/closeconnection.php';
}

//delete..............................................................
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $qry="DELETE FROM studentclasses WHERE id=$id";

    include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
if($result){
    $_SESSION['msg'] = "Deleted successfully";
    header('location: studentclasses.php');
}else{
    echo "error deleting ";
}
include '../includes/closeconnection.php';
} 
?>
