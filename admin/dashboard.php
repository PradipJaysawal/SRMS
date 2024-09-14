<?php include 'header.php'; 
$qrycat1 = "SELECT count(id) as totalstudentclsses FROM studentclasses";
$qrycat = "SELECT count(id) as totalsub FROM sub";
$qrycat2 = "SELECT count(sid) as totalstudentinfo FROM studentinfo";
$qrycat3 = "SELECT count(id) as totalresults FROM results";
include '../includes/dbconnection.php';
$resultcat1 = mysqli_query($conn, $qrycat1);
$rowcat1 = mysqli_fetch_assoc($resultcat1);
$resultcat = mysqli_query($conn, $qrycat);
$rowcat = mysqli_fetch_assoc($resultcat);
$resultcat2 = mysqli_query($conn, $qrycat2);
$rowcat2 = mysqli_fetch_assoc($resultcat2);
$resultcat3 = mysqli_query($conn, $qrycat3);
$rowcat3 = mysqli_fetch_assoc($resultcat3);
include '../includes/closeconnection.php';
?>
            <h1 class="text-3xl font-bold">Dashboard</h1>
            <hr class="my-3 h-1 bg-green-500">
            <div class="grid grid-cols-2 gap-10">
                <div class="bg-red-500 text-white p-5 shadow rounded-2xl block p-4 hover:bg-yellow-200 my-2">
                    <h1 class="text-2xl font-bold">Total Regd Students </h1>
                    <h1 class="text-4xl font-bold"><?php echo $rowcat2['totalstudentinfo']; ?></h1>
                </div>

                <div class="bg-blue-500 text-white p-5 shadow rounded-2xl block p-4 hover:bg-yellow-200 my-2">
                    <h1 class="text-2xl font-bold ">Subject lists</h1>
                    <h1 class="text-4xl font-bold"><?php echo $rowcat['totalsub']; ?></h1>
                </div>

                <div class="bg-green-500 text-white p-5 shadow rounded-2xl block p-4 hover:bg-yellow-200 my-2">
                    <h1 class="text-2xl font-bold">Total classes</h1>
                    <h1 class="text-4xl font-bold"><?php echo $rowcat1['totalstudentclsses']; ?></h1>
                 </div>

                <div class="bg-pink-500 text-white p-5 shadow rounded-2xl block p-4 hover:bg-yellow-200 my-2">
                    <h1 class="text-2xl font-bold">Results Declared</h1>
                    <h1 class="text-4xl font-bold"><?php echo $rowcat3['totalresults']; ?></h1>
                </div>
            </div>
<?php include 'footer.php';?>
