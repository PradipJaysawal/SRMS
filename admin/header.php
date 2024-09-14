<?php session_start(); 
if(!isset($_SESSION['islogin']))
{
    header('location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css"/>
</head>
<body>
    <?php if(isset($_SESSION['msg'])){ ?>
    <div id="msg" class="fixed right-4 top-4 bg-blue-600 text-white px-10 py-4 rounded-xl text-xl font-bold">
        <p><?php echo $_SESSION['msg']; ?></p>
    </div>
        <script>
            setTimeout(function(){
                document.getElementById('msg').style.display = 'none';
            }, 2000);
        </script>

    <?php 
    unset($_SESSION['msg']);
    } ?>


    <div class="flex">
        <nav class="h-screen bg-purple-400 shadow w-56">
            <img class="mx-12 my-3" width="100" src="../images/12.png" alt="">
             <div class="mt-5 text-black text-lg font-bold">
                <p class="text-center font-bold">Hello, <?php echo $_SESSION['username']; ?></p>
                <a href="dashboard.php" class="block p-4 hover:bg-white my-2"><i class="ri-dashboard-fill"></i> Dashboard</a>
                <a href="studentclasses.php" class="block p-4 hover:bg-white my-2"><i class="ri-home-7-fill"></i> Student Classes</a>
                <a href="sub.php" class="block p-4 hover:bg-white my-2"><i class="ri-book-open-fill"></i> Subjects</a>
                <a href="studentinfo.php" class="block p-4 hover:bg-white my-2"><i class="ri-team-fill"></i> Students</a>
                <a href="results.php" class="block p-4 hover:bg-white my-2"><i class="ri-equal-line"></i> Results</a>
                <!-- <a href="classroom.php" class="block p-4 hover:bg-white my-2"><i class="ri-equal-line"></i> Classroom</a> -->
                <!-- <a href="library.php" class="block p-4 hover:bg-white my-2"><i class="ri-equal-line"></i> Library</a> -->
                <a href="logout.php" class="block p-4 hover:bg-white my-2"><i class="ri-logout-box-r-line"></i> Logout</a>
             </div>
        </nav>
        <!-- For Content Part -->
        <div class="p-4 flex-1">




        