<?php 
view("/components/heading.view.php");

?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-20 w-auto" src="<?= RESOURCES ?>/images/bnka.png" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Add new Class</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/classes" method="POST">

      <div>
        <label for="class_name" class="block text-sm/6 font-medium text-gray-900">Class name</label>
        <div class="mt-2">
          <input type="text" name="class_name" id="class_name" autocomplete="class_name" value="<?= $class_name ?? '' ?>" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <label for="teacher_name" class="block text-sm/6 font-medium text-gray-900">Teacher name</label>
        <div class="mt-2">
          <input type="text" name="teacher_name" id="teacher_name" autocomplete="teacher_name" value="<?= $teacher_name ?? '' ?>" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

      
      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add class</button>
      </div>
    </form>
    <p class="mt-5 text-red-500 text-center">
      <?php 
      if(!empty($errors))
        foreach($errors as $error) { echo '<br>'.$error . '</br>' ?? '</br>'; } 
      ?>
    </p>
  </div>
</div>

<?php
view("/components/footer.view.php");
?>