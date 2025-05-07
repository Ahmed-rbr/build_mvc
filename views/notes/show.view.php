
<?php require_once basePath('views/parites/head.php') ;
require_once basePath('views/parites/nav.php')
 ;?>

    <div class="sm:mb-8 m-auto mt-24  w-2/5">
        <div class="px-6 py-6 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">

        
<p>
 <?=htmlspecialchars( $note['body']) ?> 
</p>
<div class="mt-6 flex items-center justify-end gap-x-6">

<a class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"  href="/pease/note/update?id=<?=$note['id']?>">Update</a>
<a class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-gray-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="/pease/notes">Back</a>


</div>
</div>
</div>

</body>
</html>