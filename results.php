<?php
 

// Check if user is logged in


// If user is logged in, continue with displaying the gradesheet
?>
<?php include 'includes/header.php'; ?>

<form class="w-full max-w-lg max-w-md mx-auto py-5 p-5 my-5 bg-red-400" action="gradesheet.php" method="GET">
<p class="text-center font-bold m-2 ">Student Result Management System</p>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-symbol">
        Symbol No.</label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-symbol" type="text" placeholder="51234" name="symbol">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-grade">
        Grade</label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-grade" type="text" placeholder="4" name="grade">
    </div>
    <!-- You may add other fields if needed -->
  </div>

  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <?php
      if(isset($_SESSION['username'])) { ?>
        <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" name="submit">Search</button>

      <?php } else {?>
        <a href="login.php" class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Search</a>
      <?php } ?>
       
    </div>
  </div>
</form>

<?php include 'includes/footer.php'; ?>
