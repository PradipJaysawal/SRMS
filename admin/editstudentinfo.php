<?php include 'header.php';

$id = $_GET['sid'];
$qry ="SELECT * FROM studentinfo WHERE sid=$id";
include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
include '../includes/closeconnection.php';
$row=mysqli_fetch_assoc($result);
?>


    
     <h1 class="text-3xl font-bold">Edit Student Info</h1>
     <hr class="my-3 h-1 bg-green-500">

     <form action="actionstudentinfo.php" method="POST">
        <input type="hidden" name="categoryid" value="<?php echo $row['sid'] ?>">
        
        <input type="text" name="sid" value="<?php echo $row['sid']; ?>" placeholder="Enter 
Student ID" class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Enter 
First Name" class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="midname" value="<?php echo $row['midname']; ?>" placeholder="Enter 
mid Name" class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Enter 
Last Name" class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="gender" value="<?php echo $row['gender']; ?>" placeholder="Enter 
Gender" class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="address" value="<?php echo $row['address']; ?>" placeholder="Enter 
Address" class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="grade" value="<?php echo $row['grade']; ?>" placeholder="Enter 
Grade" class="p-2 bg-gray-100 border rounded w-full block my-3">

        <div class="my-5 flex justify-center gap-5">
            <input type="submit" name="update" value="Update Student" class="bg-blue-500 text-white px-4 
            py-2 rounded cursor-pointer" >
            <a href="" class="bg-red-500 text-white px-8 py-2 rounded">Exit</a>

        </div>
     </form>



<?php include 'footer.php';?>