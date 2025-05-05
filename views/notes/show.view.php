
<?php require_once basePath('views/parites/head.php') ;
require_once basePath('views/parites/nav.php')
 ;?>

    <div class="hidden sm:mb-8 mt-24 sm:flex sm:justify-center">
        <div class="px-6 py-6 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">

<p class="text-blue-500 hover:underline"><a href="/pease/notes">Back</a></p>
        
<p>
 <?=htmlspecialchars( $note['body']) ?> 
</p>
<form method="post" class="mt-4">
    <input type="hidden" name="id" value="<?=$note['id']?>">
<button class="text-sm text-red-500">Delete</button>

</form>
       </div>
      </div>

</body>
</html>