<?php
    session_start();
    if(isset($_POST['store']))
    {

    // $studentid = $_POST['studentid'];
    $sid = $_POST['sid'];
    $firstname = $_POST['firstname'];
    $midname = $_POST['midname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $grade = $_POST['grade'];
    // validation cheack.......................
      $qrycheck = "SELECT * FROM studentinfo WHERE sid=$sid";
      include '../includes/dbconnection.php';
      $resultcheck=mysqli_query($conn,$qrycheck);
      include '../includes/closeconnection.php';
      if(mysqli_num_rows($resultcheck)> 0){
          $_SESSION['msg'] = "ID already exist";
          echo '<script> window.history.back();</script>';
          exit();
      }
    // .......................................................................................
    $qry = "INSERT INTO studentinfo(sid,firstname,midname,lastname,gender,address, grade) VALUES 
    ('$sid','$firstname','$midname','$lastname','$gender','$address','$grade')";

    include '../includes/dbconnection.php';
    $result=mysqli_query($conn,$qry);
    if($result){
        $_SESSION['msg'] = "Added successfully";
        header('location: studentinfo.php');
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
        $sid = $_POST['sid'];
        $firstname = $_POST['firstname'];
        $midname = $_POST['midname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $grade = $_POST['grade'];

        $qry="UPDATE studentinfo SET sid = '$sid', firstname = '$firstname',midname = '$midname', lastname = '$lastname', gender = '$gender', address = '$address', grade='$grade' WHERE sid=$sid";
        include '../includes/dbconnection.php';
    $result=mysqli_query($conn,$qry);
    if($result){
        $_SESSION['msg'] = "Updated successfully";
        header('location: studentinfo.php');
    }else{
        echo "error updating ";
    }
    include '../includes/closeconnection.php';
    }

    //delete..............................................................
    if(isset($_GET['deleteid']))
    {
        $sid=$_GET['deleteid'];
        $qry="DELETE FROM studentinfo WHERE sid=$sid";

        include '../includes/dbconnection.php';
    $result=mysqli_query($conn,$qry);
    if($result){
        $_SESSION['msg'] = "Deleted successfully";
        header('location: studentinfo.php');
    }else{
        echo "error deleting ";
    }
    include '../includes/closeconnection.php';
    } 
?>
