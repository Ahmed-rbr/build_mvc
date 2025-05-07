<?php 
require_once basePath('views/parites/head.php') ;
require_once basePath('views/parites/nav.php')
 ;?>
<main class="mt-24 w-4/5 md:w-3/5 m-auto">
 

<form method="post" action="/pease/note">
     
       

     <label for="body" class="block text-sm/6 font-medium text-gray-900">Update Note:</label>
     <div class="mt-2">
      <input type="hidden" name="__method" value="patch">
       <textarea name="body" id="body"  rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" ><?=$note['body']??""?></textarea>
   <input type="hidden" name="id" value="<?= $note['id']?>">
     </div>
     <?php if(isset($errs['body'])){
         ?>
                   <p class="text-red-400 text-xs mt-2"><?= $errs['body'] ?></p>
                   <?php  } ?>
     <div class="mt-6 flex items-center justify-end gap-x-6">
 
     <a class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-gray-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="/pease/note?id=<?=$note['id'] ?>">Cancel</a>

    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
  
  </div>

    </form>
  
  
    <form method="post" class="mt-4">
    <input type="hidden"  name="__method" value="DELETE" id="">
    <input type="hidden" name="id" value="<?=$note['id']?>">
    <button class="text-sm  font-semibold text-red-500">Delete</button>
    </form>
 

  

</main>