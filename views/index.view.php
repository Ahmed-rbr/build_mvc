<?php

   require_once 'parites/head.php' ;

   require_once 'parites/nav.php' ;
 $user=$_SESSION['user']??null;
   
   ?>

  

 
      <div class="hidden sm:mb-8  mt-24 sm:flex sm:justify-center">
        <div class="relative  px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
       <?php if ($user): ?>
    <p>hello user , your email: <?= htmlspecialchars($user['email'])?>and id <?=  $user['user_id']?></p>
  <?php else: ?>
    <p>hello Guest, your email: </p>
  <?php endif; ?>
      </div>
      </div>
     

</body>
</html>