<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jvee's Photography</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

      
    </head>
    <body class="antialiased">

    <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a  href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      
      <span class="ml-3 text-xl">Jvee's Photography</span>
    </a>
  
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
              <a class="mr-5 hover:text-gray-900" href="/clients">Clients</a>
              <a class="mr-5 hover:text-gray-900" href="/about">About</a>
              <a class="mr-5 hover:text-gray-900" href="/contact">Contact</a>

    </nav>
  

  </div>
</header>

           
    
    <main class="max-w-6xl mx-auto">
         <?php echo e($slot); ?>

    </main>
    </body>
</html>
<?php /**PATH C:\Users\acer\Documents\laravel\snackhouse\resources\views/layouts/ap.blade.php ENDPATH**/ ?>