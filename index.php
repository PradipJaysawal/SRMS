<?php include 'includes/header.php'; ?>

<img src="images/bg3.png" class="w-full h-90" >

<!-- Clickable div
<a href="#" id="clickableDiv">
    <div class="gap-10 p-8 px-20 grid grid-cols-2">
        <div class="bg-gray-100 mx-auto w-full h-60 grid place-items-center rounded shadow">
            // Content of the first div 
        </div>

        <div class="bg-gray-100 mx-auto w-full h-60 grid place-items-center rounded shadow">
            ghdgsafjhgsdj
        </div>
    </div>
</a>

//Clickable h1 
<a href="#" id="noticeBoardLink">
    <h1 class="text-center font-bold text-2xl my-8">Notice <span class="text-red-500">Board</span></h1>
</a> -->

<a href="classroom.php" id="clickable">
<div class="grid grid-cols-3 gap-40 px-20 m-10">
    <div class="bg-gray-100 p-2 w-80 rounded shadow">
        <img src="images/class.jpg" class="w-full object-cover h-60 mx-auto" alt="">
        <h1 class="text-center font-bold text-2xl text-red-500 my-8">Class Room</h1>
    </div>
</a>
    <a href="library.php" id="clickable">
        <div class="bg-gray-100 p-2 w-80 rounded shadow">
            <img src="images/library.jpg" class="w-80 object-cover h-60 mx-auto" alt="">
            <h1 class="text-center font-bold text-2xl my-8 text-red-500">Library</h1>
        </div>
    </a>
    <a href="lab.php" id="clickable">
    <div class="bg-gray-100 p-2 w-80 rounded shadow">
        <img src="images/lab1.jpg" class="w-80 object-cover h-60 mx-auto" alt="">
        <h1 class="text-center font-bold text-2xl my-8 text-red-500">Lab</h1>
    </div>
</div>
</a>

<script>
    // Add a click event listener to the clickable div
    document.getElementById('clickableDiv').addEventListener('click', function() {
        // Perform the desired action when the div is clicked
        alert('You clicked the clickable div!');
        // You can replace the alert with any other action you want.
    });

    // Add a click event listener to the clickable div
    document.getElementById('clickable').addEventListener('click', function() {
        // Perform the desired action when the div is clicked
        alert('You clicked the clickable div!');
        // You can replace the alert with any other action you want.
    });

    // Add a click event listener to the clickable h1
    document.getElementById('noticeBoardLink').addEventListener('click', function() {
        // Perform the desired action when the h1 is clicked
        alert('You clicked the Notice Board!');
        // You can replace the alert with any other action you want.
    });
</script>

<?php include 'includes/footer.php'; ?>
