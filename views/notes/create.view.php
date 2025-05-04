<?php 
require_once basePath('views/parites/head.php') ;
require_once basePath('views/parites/nav.php')
 ;?>
<main class="mt-24 w-4/5 md:w-3/5 m-auto">
  <form method="POST">
     
       

          <label for="body" class="block text-sm/6 font-medium text-gray-900">create Note:</label>
          <div class="mt-2">
            <textarea name="body" id="body"  rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" ><?=$_POST['body']??""?></textarea>
         
         <?php if(isset($errs['body'])){
         ?>
                   <p class="text-red-400 text-xs mt-2"><?= $errs['body'] ?></p>
                   <?php } ?>
          </div>

     

        



  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
  </div>
  </form>
</main>