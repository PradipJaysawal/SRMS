<?php
include 'header.php'; 
include '../includes/dbconnection.php';

// Update query to fetch all student classes with their respective grades count
$qry = "SELECT sc.*, COUNT(si.grade) AS num 
        FROM studentclasses sc
        LEFT JOIN studentinfo si ON sc.grade = si.grade
        GROUP BY sc.grade
        ORDER BY sc.grade ASC";
$result = mysqli_query($conn, $qry);

?>

<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  
<h1 class="text-3xl font-bold">Class</h1>
<hr class="my-3 h-1 bg-green-500">
<!--Add Student Button-->
<div class="text-right my-5">
    <a href="createstudentclasses.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-orange-600">Add Class</a>
</div>

<table class="w-full">
    <tr class="bg-gray-200">
        <th class="border p-2">Grade</th>
        <th class="border p-2">Number Of Students</th>
        <th class="border p-2">Action</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)){
        $grade = $row['grade'];
        $num_students = $row['num'];
        
        // Update num column in studentclasses table with count of grades
        mysqli_query($conn, "UPDATE studentclasses SET num = '$num_students' WHERE grade = '$grade'");
    ?>
    <tr class="text-center">
        <td class="border p-2"><?php echo $grade; ?></td>
        <td class="border p-2"><?php echo $num_students; ?></td>
        <td class="border p-2">
            <!-- <a href="editstudentclasses.php?id=<?php echo $row['id']; ?>" class="bg-blue-600 text-white px-4 mx-1 px-1 rounded"><i class="ri-edit-box-fill"></i></a> -->
            <a href="actionclasses.php?deleteid=<?php echo $row['id']; ?>" class="bg-red-600 text-white px-4 mx-1 px-1 rounded"><i class="ri-delete-bin-6-line"></i></a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>

<?php include 'footer.php'; ?>
