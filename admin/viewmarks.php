<?php 
include 'header.php'; 
include '../includes/dbconnection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

$qry = "SELECT * FROM results WHERE id = $id";
$subqry = "SELECT * FROM sub";

$qry3 = "SELECT * FROM sub";
$result = mysqli_query($conn, $qry);
$result2 = mysqli_query($conn, $subqry);
$result5 = mysqli_query($conn, $qry);
$subrow = mysqli_num_rows($result2);
$row  = mysqli_fetch_assoc($result);

$totalMarks = 0;
$totalPossibleMarks = 500;

while($row5 = mysqli_fetch_assoc($result5)) {
    $totalMarks += $row5['marks']+$row5['english']+$row5['maths']+$row5['computer']+$row5['nepali'];
}

while($row4 = mysqli_fetch_assoc($result)) {
    $totalPossibleMarks = $subrow * 100;
}

$totalPercentage = ($totalMarks / $totalPossibleMarks) * 100;

mysqli_data_seek($result, 0); // Resetting result pointer to the beginning

?>

<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

<h1 class="text-3xl font-bold">Marks</h1>
<hr class="my-3 h-1 bg-green-500">

<table class="w-full">
    <tr class="bg-gray-200">
        <th class="border p-2">Subject Code</th>
        <th class="border p-2">Subject Name</th>
        <th class="border p-2">Marks</th>
    </tr>
    
    <?php 
              // Loop through each subject if $symbol is not empty
              if ($result2 && mysqli_num_rows($result2) > 0) {
                while($row2  = mysqli_fetch_assoc($result2)) {
            ?>
    <tr>
    <td class="border p-2"><?php echo $row2['code']; ?></td>
              <td class="border p-2"><?php echo $row2['subjects']; ?></td>
              <td class="border p-2"><?php 
                // Check if $row is not null before accessing its elements
                if($row && isset($row[$row2['subjects']])) {
                    echo $row[$row2['subjects']]; // Assuming subject code matches column name in the results table
                } else {
                    echo "N/A"; // Or any other indication of missing data
                }
              ?></td>
    </tr>
    <?php 
                }
              } else {
                // Display a message if $symbol is empty or no subjects found
                echo "<tr><td colspan='3'>No results found.</td></tr>";
              }
            ?>



    <tr>
        <td class="border p-2"></td>
        <td class="border p-2"></td>
        <td class="border p-2">Total Percentage: <?php echo number_format($totalPercentage, 2); ?>%</td>
    </tr>

</table>

<?php include '../includes/closeconnection.php'; ?>
<?php include 'footer.php'; ?>
