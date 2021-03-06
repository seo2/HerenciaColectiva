<?php $__env->startSection('content'); ?> 


<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
?>
<section class="w-full flex mt-32 pt-6 pb-6 h-48 bg-azul  ">
    <div class="container flex flex-row h-100 max-w-screen-xl mx-auto justify-between lg:px-32">
        <div class="relative w-2/3">
            <a href="/mis-talleres/" class="text-blanco uppercase relative top-0 hover:text-beige transition duration-200"><i class="fak fa-back mr-4"></i> Volver</a>
            <h1 class="text-beige font-festivo6 text-2xl lg:text-4xl absolute bottom-0"><?php echo e(the_title()); ?></h1>
        </div> 
        <div class="w-1/3 flex justify-center content-center items-center">
            <?php
                $permalink  = get_permalink( get_field('tallerista'));
                $title      = get_the_title( get_field('tallerista') );
                $url        = get_the_post_thumbnail_url( get_field('tallerista')  );
                $instagram  = get_field( 'instagram', get_field('tallerista') );
            ?>
            <div class="rounded-full h-20 w-20 flex items-center justify-center bg-naranjo border border-negro mr-4 bg-cover" style="background-image: url('<?php echo $url; ?>">

            </div>
            <div>
                <a href="<?php echo $permalink; ?>" class="text-beige uppercase text-xle hover:underline"><?php echo $title; ?></p>
                <a href="https://instagram.com/<?php echo $instagram; ?>" class="text-beige hover:underline"><?php echo '@'.$instagram; ?></a>
            </div>
        </div>
    </div>
</section>

<section class="mt-12 mb-48">
    <div class="flex container flex-row max-w-screen-xl px-4 mx-auto lg:items-center justify-left md:px-6 lg:px-12">
        <div class="w-full">
 
        <?php
                the_content();
        ?>
        </div>
    </div>
</section>
<?php 
        } // end while
    } // end if
?>

 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php if(!is_page('cart')): ?>
        <?php echo $__env->make('partials.suscribirse', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Seo2/Dropbox/04 - Diseño y Desarrollo/00 - En desarrollo/01 - Sitios/herenciacolectiva/wp-content/themes/mountainbreeze/templates/bbpress.blade.php ENDPATH**/ ?>