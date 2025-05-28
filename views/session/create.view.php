
<?php 
require_once basePath('views/parites/head.php') ;
require_once basePath('views/parites/nav.php')
 ;?>


<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Login to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">



    <form class="space-y-6" action="/pease/session" method="POST">
   
      
      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
        <div class="mt-2">
          <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>
          <?php if(isset($errs['empty'])){
         ?>
                   <p class="text-red-400 text-xs mt-2"><?= $errs['email'] ?></p>
                   <?php  } ?>
      <?php if(isset($errs['email'])){
         ?>
                   <p class="text-red-400 text-xs mt-2"><?= $errs['email'] ?></p>
                   <?php  } ?>
      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
         
        </div>

       
        <div class="mt-2">
          <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>

       
      </div>
       <?php if(isset($errs['pwd'])){
         ?>
                   <p class="text-red-400 text-xs mt-2"><?= $errs['pwd'] ?></p>
                   <?php  } ?>
          <?php if(isset($errs['empty'])){
         ?>
                   <p class="text-red-400 text-xs mt-2"><?= $errs['empty'] ?></p>
                   <?php  } ?>
      
      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm/6 text-gray-500">
     
      <a href="/pease/register" class="font-semibold text-indigo-600 hover:text-indigo-500"> Don't have an acount?</a>
    </p>
  </div>
</div>


</body>
</html>