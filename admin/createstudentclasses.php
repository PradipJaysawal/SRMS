<?php include 'header.php';?>
    
     <h1 class="text-3xl font-bold">Add Class</h1>
     <hr class="my-3 h-1 bg-green-500">

     <form action="actionclasses.php" method="POST">
        <input type="number" name="grade" placeholder="Enter Grade" class="p-2 bg-gray-100 border rounded w-full 
        block my-3">
        <!-- <input type="number" name="num" placeholder="Enter Number of Student " class="p-2 bg-gray-100 border rounded w-full block my-3"> -->

        <div class="my-5 flex justify-center gap-5">
            <input type="submit" name="store" value="Add Student" class="bg-blue-500 text-white px-4 py-2 rounded 
            cursor-pointer" >
            <a href="" class="bg-red-500 text-white px-8 py-2 rounded">Exit</a>

        </div>
     </form>



<?php include 'footer.php';?>