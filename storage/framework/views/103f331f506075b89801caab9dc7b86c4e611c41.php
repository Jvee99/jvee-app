<?php if (isset($component)) { $__componentOriginal83a7fc2ff87012617b83784abd24b7ef1e6e11ba = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ApLayout::class, []); ?>
<?php $component->withName('ap-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      
      <h2 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">HELLO!</h2>
      <br></br>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">We are Jvee's Photography

         We are A photographer, a professional that focuses on the art of taking photographs with a digital or film camera. Photographers use artificial and/or natural lighting to snap pictures of various people, places and things in a variety of settings. We are expert in different style of position in taking pictures.
<br></br>
          We are the photographer in the part of the Ilocos Norte, We give a better shots.
<br></br>
         The different styles of photography we know</p>

         <ol>
            <li>Spots Photography</li>
            <li>Portrait Photography</li>
            <li>Fashion Photography</li>
            <li>Still Life Photography</li>
            <li>Architctural Photography</li>
         </ol>
      
    </div>
</section>



 <?php if (isset($__componentOriginal83a7fc2ff87012617b83784abd24b7ef1e6e11ba)): ?>
<?php $component = $__componentOriginal83a7fc2ff87012617b83784abd24b7ef1e6e11ba; ?>
<?php unset($__componentOriginal83a7fc2ff87012617b83784abd24b7ef1e6e11ba); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\acer\Documents\laravel\snackhouse\resources\views/about.blade.php ENDPATH**/ ?>