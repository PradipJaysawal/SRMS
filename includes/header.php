<?php
session_start();
$qrycat = "SELECT * FROM studentclasses ";
include 'includes/dbconnection.php';
$resultcat = mysqli_query($conn, $qrycat);
// include 'includes/closeconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release-pro/v4.0.0/css/solid.css">
</head>
<body>

<nav class="flex bg-purple-400 px-20 py-1 items-center justify-between">
    <img src="images/12.png" width="100" alt="">
    <div>
        <a href="index.php" class="text-lg font-bold text-white px-5">Home</a>
        <a href="about.php" class="text-lg font-bold text-white  px-5">About</a>
        <a href="contact.php" class="text-lg font-bold text-white  px-5">Contact</a>
        <a href="results.php" class="text-lg font-bold text-white  px-5">Results</a>

        <!-- <a href="login.php" class="text-lg font-bold px-5">Login</a> -->

        <?php if(isset($_SESSION['islogin'])) { ?>
            <div class="text-lg font-bold p-5 relative group inline cursor-pointer"><i class="ri-user-fill"></i>
                <div class="absolute top-10 right-0 hidden group-hover:block border rounded-lg bg-gray-100 text-gray-800 w-40 text-sm">
                    <!-- <a href="" class="p-2 block rounded hover:bg-gray-200"><i class="ri-user-fill"></i> My Profile</a> -->
                    <hr>
                    <!-- <a href="carts.php" class="p-2 block rounded hover:bg-gray-200">
                        <p><i class="ri-shopping-cart-2-line"></i> My Cart</p>
                    </a> -->
                    <hr>
                    <a href="admin/logout.php" class="p-2 block rounded hover:bg-gray-200 "><i class="ri-logout-box-line "></i>&nbsp;Logout</a>
                </div>
            </div>
            <?php } else { ?>
            <a href="login.php" class="text-lg text-white font-bold px-5">Login</a>
            <?php } ?>
    </div>
</nav>
