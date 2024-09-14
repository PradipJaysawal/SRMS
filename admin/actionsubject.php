<?php
session_start();
if(isset($_POST['store']))
{

$code = $_POST['code'];
$subjects = $_POST['subjects'];
// validation check........................................
$qrycheck = "SELECT * FROM sub WHERE code=$code";
include '../includes/dbconnection.php';
$resultcheck=mysqli_query($conn,$qrycheck);
include '../includes/closeconnection.php';
if(mysqli_num_rows($resultcheck)> 0){
    $_SESSION['msg'] = "Subject codes already exist";
    echo '<script> window.history.back();</script>';
    exit();
}
// .....................
$qry = "INSERT INTO sub(code, subjects) VALUES ('$code','$subjects')";

include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
if($result){
    $_SESSION['msg'] = "Added successfully";
    header('location: sub.php');
}else{
    echo "error Adding ";
}
include '../includes/closeconnection.php';
}

//update......................................................

if(isset($_POST['update']))
{
    $id=$_POST['categoryid'];
    $code=$_POST['code'];
    $subjects=$_POST['subjects'];

    $qry="UPDATE sub SET code = '$code', subjects='$subjects' WHERE id=$id";
    include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
if($result){
    $_SESSION['msg'] = "Updated successfully";
    header('location: sub.php');
}else{
    echo "error updating ";
}
include '../includes/closeconnection.php';
}

//delete..............................................................
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $qry="DELETE FROM sub WHERE id=$id";

    include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
if($result){
    $_SESSION['msg'] = "Deleted successfully";
    header('location: sub.php');
}else{
    echo "error deleting ";
}
include '../includes/closeconnection.php';
} 
?>
