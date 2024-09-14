<?php
    include '../includes/dbconnection.php';
    session_start();
    if(isset($_POST['store']))
    {

    // $studentid = $_POST['studentid'];
    $code = $_POST['code'];
    // $name = $_POST['name'];
    // $grade = $_POST['grade'];
    $marks = $_POST['marks'];
    $english = $_POST['english'];
    $maths = $_POST['maths'];
    $computer = $_POST['computer'];
    $nepali = $_POST['nepali'];


    $subqry = "SELECT * FROM sub";
    $resultsub = mysqli_query($conn, $subqry);
    // $subrow = mysqli_fetch_assoc($resultsub);
    $numrow = mysqli_num_rows($resultsub);

    $totalMarks = $marks + $english + $maths + $computer + $nepali;
        

    $totalPossibleMarks = $numrow * 100;

    $percentage = ($totalMarks / $totalPossibleMarks) * 100;


    // validation cheack.......................
      $qrycheck = "SELECT * FROM results WHERE code=$code";
      
      $resultcheck=mysqli_query($conn,$qrycheck);
      include '../includes/closeconnection.php';
      if(mysqli_num_rows($resultcheck)> 0){
          $_SESSION['msg'] = "Code already exist";
          echo '<script> window.history.back();</script>';
          exit();
      }
    // .......................................................................................
    $qry = "INSERT INTO results(code, marks, english, maths, computer, nepali, percentage) VALUES 
    ('$code','$marks','$english','$maths','$computer','$nepali', '$percentage')";

    include '../includes/dbconnection.php';
    $result=mysqli_query($conn,$qry);
    if($result){
        $_SESSION['msg'] = "Added successfully";
        header('location: results.php');
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
        $code = $_POST['code'];
        $name = $_POST['name'];
        $grade = $_POST['grade'];
        $marks = $_POST['marks'];
        $english = $_POST['english'];
        $maths = $_POST['maths'];
        $computer = $_POST['computer'];
        $nepali = $_POST['nepali'];

        $subqry = "SELECT * FROM sub";
        $resultsub = mysqli_query($conn, $subqry);
        // $subrow = mysqli_fetch_assoc($resultsub);
        $numrow = mysqli_num_rows($resultsub);
    
        $totalMarks = $marks + $english + $maths + $computer + $nepali;
            
    
        $totalPossibleMarks = $numrow * 100;
    
        $percentage = ($totalMarks / $totalPossibleMarks) * 100;
    
    


        $qry="UPDATE results SET code = '$code',name = '$name', grade = '$grade', marks = '$marks', english = '$english', maths = '$maths', computer = '$computer', nepali = '$nepali', percentage = '$percentage' WHERE id=$id";
        include '../includes/dbconnection.php';
    $result=mysqli_query($conn,$qry);
    if($result){
        $_SESSION['msg'] = "Updated successfully";
        header('location: results.php');
    }else{
        echo "error updating ";
    }
    include '../includes/closeconnection.php';
    }

    //delete..............................................................
    if(isset($_GET['deleteid']))
    {
        $id=$_GET['deleteid'];
        $qry="DELETE FROM results WHERE id=$id";

        include '../includes/dbconnection.php';
    $result=mysqli_query($conn,$qry);
    if($result){
        $_SESSION['msg'] = "Deleted successfully";
        header('location: results.php');
    }else{
        echo "error deleting ";
    }
    include '../includes/closeconnection.php';
    } 
?>
