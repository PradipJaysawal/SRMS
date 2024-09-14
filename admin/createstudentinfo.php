<?php include 'header.php';?>
    
     <h1 class="text-3xl font-bold">Add Student Info</h1>
     <hr class="my-3 h-1 bg-green-500">

     <form action="actionstudentinfo.php" method="POST">
        
        <input type="text" name="sid" placeholder="Enter Student ID " class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="firstname" placeholder="Enter First Name " class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="midname" placeholder="Enter mid Name " class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="lastname" placeholder="Enter Last Name " class="p-2 bg-gray-100 border rounded w-full block my-3">
        <select name="gender" class="p-2 bg-gray-100 border rounded w-full block my-3">
            <option value="">Select Gender</option>
            <option value="Male">0</option>
            <option value="Female">1</option>
            <!-- Add more options for other subjects -->
        </select>
        <input type="text" name="address" placeholder="Enter Address " class="p-2 bg-gray-100 border rounded w-full block my-3">
        <input type="text" name="grade" placeholder="Enter Grade " class="p-2 bg-gray-100 border rounded w-full 
        block my-3">
        

        <div class="my-5 flex justify-center gap-5">
            <input type="submit" name="store" value="Add Student" class="bg-blue-500 text-white px-4 py-2 rounded 
            cursor-pointer" >
            <a href="" class="bg-red-500 text-white px-8 py-2 rounded">Exit</a>

        </div>
     </form>



<?php include 'footer.php';?>