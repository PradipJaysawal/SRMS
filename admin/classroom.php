<?php include 'header.php'; 
$qry="SELECT *FROM classroom ";
include '../includes/dbconnection.php';
$result=mysqli_query($conn,$qry);
include '../includes/closeconnection.php';

?>
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  
    <h1 class="text-3xl font-bold">Classroom</h1>
    <hr class="my-3 h-1 bg-green-500">
    <!--Add Student Button-->
    <div class="text-right my-5">
        <a href="addclass.php" class="bg-green-500 text-white px-4 py-2 rounded 
        hover:bg-orange-600">Add Class</a>
    </div>
    <table class="w-full">
        <tr class="bg-gray-200">
            <th class="border p-2">ID</th>
            <th class="border p-2">Image</th>
            <th class="border p-2">Description</th>
            
            <th class="border p-2">Action</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
       
        ?>
        <tr class="text-center">
            <td class="border p-2"><?php echo $row['id']; ?></td>
            <td class="border p-2 w-80"><img src="../images/<?php echo $row['image']; ?>" alt=""></td>
            <td class="border p-2"><?php echo $row['description']; ?></td>
            
            <td class="border p-2">
                <a href="editclassroom.php?id=<?php echo $row['id']; ?>" class="bg-blue-600 
                text-white px-4 mx-1 px-1 rounded"><i class="ri-edit-box-fill"></i></a>
                <a href="actionclassroom.php?deleteid=<?php echo $row['id']; ?>" class="bg-red-600 text-white px-4 mx-1 px-1 
                rounded"><i class="ri-delete-bin-6-line"></i></a>
            </td>
        </tr>
        <?php
         }
         ?>
    </table>

    

<?php include 'footer.php'; ?>