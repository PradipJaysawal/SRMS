<?php 
include 'header.php'; 
include '../includes/dbconnection.php';

$qry = "SELECT * FROM results";
$result = mysqli_query($conn, $qry);

?>

<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    
<h1 class="text-3xl font-bold">Results</h1>
<hr class="my-3 h-1 bg-green-500">
<!-- Add Student Button -->
<div class="text-right my-5">
    <a href="createresults.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-orange-600">Add Results</a>
</div>

<table class="w-full">
    <tr class="bg-gray-200">
        <th class="border p-2">Student Code</th>
        <th class="border p-2">Student Name</th>
        <th class="border p-2">Grade</th>
        <th class="border p-2">Action</th>
    </tr>
    
    <?php
    while($row=mysqli_fetch_assoc($result)) { 
        $id = $row['code'];
        $qry2 = "SELECT * FROM studentinfo WHERE sid = $id";
        $result4 = mysqli_query($conn, $qry2);

        if($result4 && mysqli_num_rows($result4) > 0) {
            $row2 = mysqli_fetch_assoc($result4); 
    ?>

    <tr class="text-center">
        <td class="border p-2"><?php echo $row['code']; ?></td>
        <td class="border p-2"><?php echo $row2['firstname'] . ' ' . $row2['midname'] . ' ' . $row2['lastname']; ?></td>
        <td class="border p-2"><?php echo $row2['grade']; ?></td>
        <td class="border p-2">
            <a href="viewmarks.php?id=<?php echo $row['id']; ?>" class="bg-blue-600 text-white px-4 mx-1 px-1 rounded">View</a>
            <a href="editresults.php?id=<?php echo $row['id']; ?>" class="bg-blue-600 text-white px-4 mx-1 px-1 rounded"><i class="ri-edit-box-fill"></i></a>
            <a href="actionresults.php?deleteid=<?php echo $row['id']; ?>" class="bg-red-600 text-white px-4 mx-1 px-1 rounded"><i class="ri-delete-bin-6-line"></i></a>
        </td>
    </tr>

    <?php
        } // End of if($result4 && mysqli_num_rows($result4) > 0)
    } // End of while loop

    include '../includes/closeconnection.php';
    ?>
</table>

<?php include 'footer.php'; ?>
