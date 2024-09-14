<?php include 'header.php'; 
$qry="SELECT *FROM studentinfo ";
include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
include '../includes/closeconnection.php';

?>
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  
    <h1 class="text-3xl font-bold">Students Info</h1>
    <hr class="my-3 h-1 bg-green-500">
    <!--Add Student Button-->
    <div class="text-right my-5">
        <a href="createstudentinfo.php" class="bg-green-500 text-white px-4 py-2 rounded 
        hover:bg-orange-600">Add Student Info</a>
    </div>
    <table class="w-full">
        <tr class="bg-gray-200">

            <th class="border p-2">Student ID</th>
            <th class="border p-2">First Name</th>
            <th class="border p-2">Mid Name</th>
            <th class="border p-2">Last Name</th>
            <th class="border p-2">Gender</th>
            <th class="border p-2">Address</th>
            <th class="border p-2">Grade</th>
            
            <th class="border p-2">Action</th>
            
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
       
        ?>
        <tr class="text-center">
 
            <td class="border p-2"><?php echo $row['sid']; ?></td>
            <td class="border p-2"><?php echo $row['firstname']; ?></td>
            <td class="border p-2"><?php echo $row['midname']; ?></td>
            <td class="border p-2"><?php echo $row['lastname']; ?></td>
            <td class="border p-2"><?php echo $row['gender']; ?></td>
            <td class="border p-2"><?php echo $row['address']; ?></td>
            <td class="border p-2"><?php echo $row['grade']; ?></td>
            
            <td class="border p-2">
                <a href="editstudentinfo.php?sid=<?php echo $row['sid']; ?>" class="bg-blue-600 
                text-white px-4 mx-1 px-1 rounded"><i class="ri-edit-box-fill"></i></a>
                <a href="actionstudentinfo.php?deleteid=<?php echo $row['sid']; ?>" class="bg-red-600 text-white px-4 mx-1 px-1 
                rounded"><i class="ri-delete-bin-6-line"></i></a>
            </td>
        </tr>
        <?php
         }
         ?>
    </table>

    

<?php include 'footer.php'; ?>
