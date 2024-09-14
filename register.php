<?php include 'includes/header.php'; ?>
<!-- register -->

<div class="flex justify-center items-center my-10">
    <form action="" method="POST" class="bg-gray-100 p-10 rounded shadow">
        <h1 class="text-center font-bold text-4xl my-10">Register</h1>
        <input type="text" class="w-full p-2 my-5 border-2 border-gray-300" 
        name="fullname" placeholder="Full name">
        <input type="email" class="w-full p-2 my-5 border-2 border-gray-300" 
        name="email" placeholder="Email">
        <input type="password" class="w-full p-2 my-5 border-2 border-gray-300" 
        name="password" placeholder="Password" pattern=".{8,}" title="Password must be at least 8 characters">
        <input type="password" class="w-full p-2 my-5 border-2 border-gray-300" 
        name="cpassword" placeholder="Confirm Password">
        <button type="submit" name="register" class="w-full p-2 my-5 bg-blue-300 
        text-white font-bold">Register</button>
        <div class="my-5">
        <p class="text-center">Already have an account? <a 
        href="login.php" class="text-blue-500">Login Now</a></p>
    </div>
    </form>
</div>

<?php include 'includes/footer.php'; ?>

<?php
if(isset($_POST['register']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Full Name validation: Check for arithmetic signs or numbers
    if (preg_match('/[0-9+\-*\/]/', $fullname)) {
        echo "<script> alert('Full name cannot contain arithmetic signs or numbers');</script>";
    } else {
        // Email validation: Check if email starts with a number
        if (preg_match('/^[0-9]/', $email)) {
            echo "<script> alert('Email address cannot start with a number');</script>";
        } else {
            if($password == $cpassword){
                $password = md5($password);
                $qry = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
                
                include 'includes/dbconnection.php';
                $result = mysqli_query($conn, $qry);
                if($result){
                    echo "<script> alert('User Registered successfully'); window.location.href='login.php';</script>";
                } else {
                    echo "<script> alert('User Registration Failed');</script>";
                }

                include 'includes/closeconnection.php';
            } else {
                echo "<script> alert('Password and Confirm Password do not match');</script>";
            }
        }
    }
}
?>
