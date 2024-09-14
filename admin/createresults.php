<?php include 'header.php';
$qry="SELECT *FROM studentinfo ";
include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
include '../includes/closeconnection.php';
?>
    
     <h1 class="text-3xl font-bold">Add Results</h1>
     <hr class="my-3 h-1 bg-green-500">

     <form action="actionresults.php" method="POST">
        
        <select name="code" class="p-2 bg-gray-100 border rounded w-full block my-3">
            <option value="">Select Code</option>
            <?php while($row=mysqli_fetch_assoc($result)){ ?>
            <option value="<?php echo $row['sid']; ?>"><?php echo $row['sid']; ?></option>
            <?php } ?>
            <!-- Add more options for other subjects -->
        </select>
        <!-- <input type="text" name="name" placeholder="Enter Student Name " class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="grade" placeholder="Enter Grade " class="p-2 bg-gray-100 border rounded w-full block my-3"> -->
        <input type="text" name="marks" placeholder="Enter Marks " class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="english" placeholder="Enter Marks of sub1 " class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="maths" placeholder="Enter Marks of sub2 " class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="computer" placeholder="Enter Marks of sub3 " class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="nepali" placeholder="Enter Marks of sub4 " class="p-2 bg-gray-100 border rounded w-full block my-3">
        

        <div class="my-5 flex justify-center gap-5">
            <input type="submit" name="store" value="Add Results" class="bg-blue-500 text-white px-4 py-2 rounded 
            cursor-pointer" >
            <a href="results.php" class="bg-red-500 text-white px-8 py-2 rounded">Exit</a>

        </div>
     </form>



<?php include 'footer.php';?>