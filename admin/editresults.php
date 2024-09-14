<?php include 'header.php';

$id = $_GET['id'];
$qry ="SELECT * FROM results WHERE id=$id";
include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
include '../includes/closeconnection.php';
$row=mysqli_fetch_assoc($result);
?>
    
     <h1 class="text-3xl font-bold">Edit Results</h1>
     <hr class="my-3 h-1 bg-green-500">

     <form action="actionresults.php" method="POST">
        <input type="hidden" name="categoryid" value="<?php echo $row['id'] ?>">
        <input type="text" name="code" value="<?php echo $row['code']; ?>" placeholder="Enter
 Student Code" class="p-2 bg-gray-100 border rounded w-full block my-3">
        <!-- <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Name of
 Student" class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="grade" value="<?php echo $row['grade']; ?>" placeholder="Enter Grade" 
class="p-2 bg-gray-100 border rounded w-full block my-3"> -->
        <input type="text" name="marks" value="<?php echo $row['marks']; ?>" placeholder="Enter Marks" 
class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="english" value="<?php echo $row['english']; ?>" placeholder="Enter Mark of sub1" 
class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="maths" value="<?php echo $row['maths']; ?>" placeholder="Enter Mark of sub2" 
class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="computer" value="<?php echo $row['computer']; ?>" placeholder="Enter Mark of sub2" 
class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="nepali" value="<?php echo $row['nepali']; ?>" placeholder="Enter Mark of sub2" 
class="p-2 bg-gray-100 border rounded w-full block my-3">
 

        <div class="my-5 flex justify-center gap-5">
            <input type="submit" name="update" value="Update Results" class="bg-blue-500 text-white px-4 
            py-2 rounded cursor-pointer" >
            <a href="" class="bg-red-500 text-white px-8 py-2 rounded">Exit</a>

        </div>
     </form>


<?php include 'footer.php';?>