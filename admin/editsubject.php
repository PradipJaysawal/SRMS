<?php include 'header.php';

$id = $_GET['id'];
$qry ="SELECT * FROM sub WHERE id=$id";
include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
include '../includes/closeconnection.php';
$row=mysqli_fetch_assoc($result);
?>


    
     <h1 class="text-3xl font-bold">Edit Subjects Info</h1>
     <hr class="my-3 h-1 bg-green-500">

     <form action="actionsubject.php" method="POST">
        <input type="hidden" name="categoryid" value="<?php echo $row['id'] ?>">
        <input type="text" name="code" value="<?php echo $row['code']; ?>" placeholder="Enter
Code" class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="subjects" value="<?php echo $row['subjects']; ?>" placeholder="Enter 
Subjects Name" class="p-2 bg-gray-100 border rounded w-full block my-3">

        <div class="my-5 flex justify-center gap-5">
            <input type="submit" name="update" value="Update Subjects" class="bg-blue-500 text-white px-4 
            py-2 rounded cursor-pointer" >
            <a href="" class="bg-red-500 text-white px-8 py-2 rounded">Exit</a>

        </div>
     </form>



<?php include 'footer.php';?>