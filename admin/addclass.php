<?php include 'header.php';?>
    
     <h1 class="text-3xl font-bold">Add Class Info</h1>
     <hr class="my-3 h-1 bg-green-500">

     <form action="actionclassroom.php" method="POST">
        
        <input type="file" name="image"class="p-2 bg-gray-100 border rounded w-full 
        block my-3">
        <input type="text" name="description" placeholder="Enter Description " class="p-2 bg-gray-100 border rounded w-full block my-3">

        <div class="my-5 flex justify-center gap-5">
            <input type="submit" name="store" value="Add Class" class="bg-blue-500 text-white px-4 py-2 rounded 
            cursor-pointer" >
            <a href="classroom.php" class="bg-red-500 text-white px-8 py-2 rounded">Exit</a>

        </div>
     </form>



<?php include 'footer.php';?>