<?php 
include 'includes/header.php'; 
include 'includes/dbconnection.php';

// Initialize $symbol variable
$symbol = "";

if(isset($_GET['symbol'])){
  $symbol = $_GET['symbol'];
}

// Fetch results for the specified symbol if $symbol is not empty
if (!empty($symbol)) {
    $resultqry = "SELECT * FROM results WHERE code = '$symbol'"; // Added single quotes around $symbol
    $result = mysqli_query($conn, $resultqry);
    // Check if result is not empty before fetching
    if($result && mysqli_num_rows($result) > 0) {
        $row  = mysqli_fetch_assoc($result);
    } else {
        $row = null; // Set $row to null if no results found
    }
}

// Fetch subjects and their corresponding marks
$subqry = "SELECT * FROM sub";
$result2 = mysqli_query($conn, $subqry);

$stdqry = "SELECT * FROM studentinfo WHERE sid = '$symbol'";
$resultstd = mysqli_query($conn, $stdqry);
$stdrow = mysqli_fetch_assoc($resultstd);

?>

<div class="flex flex-col bg-gray-50 px-60">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <?php if ($row && $stdrow) { // Check if $row and $stdrow are not empty before displaying the table ?>
        <table class="min-w-full text-left text-sm font-light text-surface dark:text-red">
          <thead class="border-b border-neutral-200 font-medium dark:border-blue">
            <p><span class="font-bold">Student Name:</span> <?php echo $stdrow['firstname']; ?> <?php echo $stdrow['midname']; ?> <?php echo $stdrow['lastname']; ?></p>
            <p><span class="font-bold">Symbol No.:</span> <?php echo $stdrow['sid']; ?></p>
            <p><span class="font-bold">Grade:</span> <?php echo $stdrow['grade']; ?></p>
            <tr>
              <th scope="col" class=" border p-2 px-6 py-4">Sub Code</th>
              <th scope="col" class="border p-2 px-6 py-4">Sub Name</th>
              <th scope="col" class="border p-2 px-6 py-4">Marks</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              // Loop through each subject if $symbol is not empty
              if (!empty($symbol) && $result2 && mysqli_num_rows($result2) > 0) {
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
          </tbody>
          <?php if(!empty($row)) { // Check if $row is not empty before displaying total percentage ?>
          <tr>
            <td class="border p-2"></td>
            <td class="border p-2"></td>
            <td class="border p-2">Total Percentage: <?php echo isset($row['percentage']) ? $row['percentage'] : 'N/A'; ?>%</td>
          </tr>
          <?php } ?>
        </table>
        <?php } else { // Display message if no matching symbol is found ?>
        <p class="text-center text-red-500">No matching records found for the provided symbol.</p>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
