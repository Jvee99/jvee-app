<?php if (isset($component)) { $__componentOriginal83a7fc2ff87012617b83784abd24b7ef1e6e11ba = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ApLayout::class, []); ?>
<?php $component->withName('ap-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>


<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-red-900">CLIENTS SAMPLE PICTURES</h1>
      <br></br>
      <img src="<?php echo e(asset('/images/c1.jpg')); ?>" height="70" width="200" style="float: left">
      <br></br>
      <img src="<?php echo e(asset('/images/c2.jpg')); ?>" height="70" width="200" style="float: left">
      <br></br>
      <img src="<?php echo e(asset('/images/c3.jpg')); ?>" height="70" width="200" style="float: left">
      <br></br>
      <p class="lg:w-1/2 w-full leading-relaxed text-black-500">We are always care about your Pictures!</p>
    </div>
</section>





 <?php if (isset($__componentOriginal83a7fc2ff87012617b83784abd24b7ef1e6e11ba)): ?>
<?php $component = $__componentOriginal83a7fc2ff87012617b83784abd24b7ef1e6e11ba; ?>
<?php unset($__componentOriginal83a7fc2ff87012617b83784abd24b7ef1e6e11ba); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\acer\Documents\laravel\snackhouse\resources\views/clients.blade.php ENDPATH**/ ?>