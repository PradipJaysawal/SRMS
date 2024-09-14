<?php include 'includes/header.php'; ?>

<div class="flex justify-center items-center my-10">
    <form action="" class="bg-gray-100 p-10 rounded shadow" method="POST">
        <h1 class="text-center font-bold text-4xl my-10">Login</h1>
        <input type="email" class="w-full p-2 my-5 border-2 border-gray-300" placeholder="Username" name="email">
        <input type="password" class="w-full p-2 my-5 border-2 border-gray-300" placeholder="password" name="password" pattern=".{8,}" title="Password must be at least 8 characters">
        <button type="submit" name="login" class="w-full p-2 my-5 bg-blue-300 text-white font-bold">Login</button>
        <div class="my-5">
        <p class="text-center">Don't have an account? <a 
        href="register.php" class="text-blue-500">Register Now</a></p>
    </div>
    </form>
</div>

<?php include 'includes/footer.php'; ?>


<?php
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $qry = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    include 'includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include 'includes/closeconnection.php';
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['fullname'];
        $_SESSION['islogin'] = 'yes'; 
         $_SESSION['role'] = $row['role'];
         $_SESSION['userid'] = $row['id'];
         if($row['role'] == 'user')
             header('location: index.php');
         else
        header('location: admin/dashboard.php');
    }
    else
    {
        echo "<script>alert('Invalid Email or Password')</script>";
    }
}
?>
