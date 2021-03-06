<?php $__env->startSection('content'); ?> 


<section class="my-48">
    <div class="flex container flex-row max-w-screen-xl px-4 mx-auto lg:items-center justify-left md:px-6 lg:px-12">
        <div class="w-full">
            <?php $__env->startComponent('partials.the_loop'); ?>
            <h1 class="font-festivo6 text-5xl mb-4"><?php echo e(the_title()); ?><h1>
            <?php echo e(the_content()); ?>

            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
</section>

 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php if(!is_page('cart')): ?>
        <?php echo $__env->make('partials.suscribirse', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Seo2/Dropbox/04 - Diseño y Desarrollo/00 - En desarrollo/01 - Sitios/herenciacolectiva/wp-content/themes/mountainbreeze/templates/index.blade.php ENDPATH**/ ?>