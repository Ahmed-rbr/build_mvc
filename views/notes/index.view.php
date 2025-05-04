
<?php 
require_once basePath('views/parites/head.php') ;
require_once basePath('views/parites/nav.php')
 ;?>

    <div class="hidden sm:mb-8 mt-24 sm:flex sm:justify-center">
        <div class="w-3/5 flex flex-col gap-8  px-6 py-6 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
          <h1>All notes:</h1><ul>
<?php foreach ($notes as$note){?>
<li>
<a class="text-gray-500 hover:underline hover:text-red-300" href="/pease/note?id=<?= $note['id']?>"><?= htmlspecialchars( $note['body']) ?></a>  
</li>
  <?php }  ?>  
  </ul>    <p class="text-blue-400 text-xl self-center  hover:underline"><a href="notes/create">Create Note</a></p>  </div>
      </div>

</body>
</html>