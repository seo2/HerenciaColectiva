<?php $__env->startSection('content'); ?> 
<?php $__env->startComponent('partials.the_loop'); ?>
<section class="w-full pt-44 pb-56 lg:pb-64 lg:pt-48 relative lg:bg-100 bg-no-repeat bg-bottom -mt-12 lg:mt-auto bg-beige" style="background-image: url('<?php bloginfo('template_url') ?>/dist/img/bg_beige_top_a_blanco.png');">
    <div class="container max-w-screen-lg mx-auto lg:flex lg:space-x-8 lg:content-end">
        <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'w-1/2' ) ); ?> 
        <div class="p-4 lg:p-0 lg:flex lg:flex-wrap lg:content-end">
            <div class="mb-8">
                <p class="text-naranjo uppercase">Cultivo</p>
                <h1 class="text-negro uppercase my-4 text-4xl"><?php the_title(); ?></h1>
                <p><?php echo get_field('epigrafe'); ?></p>
            </div>
            <div class="flex justify-between">
                <p class="text-naranjo mr-4">Valoración del maestre</p>
                <ul class="">
                    <li class="inline-block mr-1">
                        <a href="#" class="text-naranjo hover:text-negro"><i class="fas fa-star" aria-hidden="true"></i></a>
                    </li>
                    <li class="inline-block mr-1">
                        <a href="#" class="text-naranjo hover:text-negro"><i class="fas fa-star" aria-hidden="true"></i></a>
                    </li>
                    <li class="inline-block mr-1">
                        <a href="#" class="text-naranjo hover:text-negro"><i class="fas fa-star" aria-hidden="true"></i></a>
                    </li>
                    <li class="inline-block mr-1">
                        <a href="#" class="text-naranjo hover:text-negro"><i class="fas fa-star" aria-hidden="true"></i></a>
                    </li>
                    <li class="inline-block mr-1">
                        <a href="#" class="text-naranjo hover:text-negro"><i class="fal fa-star" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="w-full p-4 lg:p-0 relative lg:bg-contain bg-no-repeat bg-top -mt-32 lg:-mt-24  bg-white" >
    <div class="container max-w-screen-sm mx-auto">
        <h2 class="font-festivo8 uppercase text-negro text-4xl my-4">Formación</h2>
        <p class="text-negro mb-12"><?php echo get_field('primera_persona'); ?></p>
        <img src="<?php bloginfo('template_url') ?>/dist/img/foto_maestre2.jpg" alt="Maestre" class="w-full my-12">
        <h2 class="font-festivo8 uppercase text-negro text-4xl my-4">Formación</h2>
        <p class="text-negro mb-12"><?php echo get_field('motivacion'); ?></p>
        <h2 class="font-festivo8 uppercase text-negro text-4xl my-4">Formación</h2>
        <p class="text-negro mb-12"><?php echo get_field('ensena'); ?></p>
        <h2 class="font-festivo8 uppercase text-negro text-4xl my-4">Formación</h2>
        <p class="text-negro mb-12"><?php echo get_field('importancia'); ?></p>
        <h2 class="font-festivo8 uppercase text-negro text-4xl my-4">Formación</h2>
        <p class="text-negro mb-12"><?php echo get_field('bio'); ?></p>
        <h2 class="font-festivo8 uppercase text-negro text-4xl my-4">Formación</h2>
        <p class="text-negro mb-12"><?php echo get_field('invitacion'); ?></p>
    </div>
</section>


<section class="w-full pt-24 lg:pt-32 pb-12 relative lg:bg-100 bg-no-repeat bg-top bg-rosado" style="background-image: url('<?php bloginfo('template_url') ?>/dist/img/bg_rosado_bot_blanco_top.png');">
  
    <div class="container mx-auto">
        <h2 class="font-festivo6 text-4xl text-negro leading-none mb-12 text-center">
            <span class="font-festivo8 block">Talleres de</span>Wini Balbaun
        </h2>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-start-2 col-span-10 lg:mb-8">
                <div class="grid grid-cols-12 gap-2 lg:gap-4">
                    <div class="flex space-x-4 lg:space-x-0 lg:block col-span-12 lg:col-span-3 mb-8">
                        <div class="relative w-1/4 lg:w-auto ">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/pan.jpg" alt="pan">
                            <a href="#" class="hidden lg:inline-block text-blanco bg-azul hover:bg-rosado hover:text-fondooscuro transition duration-200 rounded-full absolute bottom-0 right-0 mr-4 mb-4 w-10 h-10 leading-10 text-center">
                                <i class="fak fa-add-bag"></i>
                            </a>
                        </div>
                        <div class="relative lg:mt-3">
                            <p class="hidden lg:block text-beige text-lg lg:text-xl">$12.990</p>
                            <h4 class="text-negro text-xl lg:text-2xl font-bold leading-none my-2 lg:my-3">Técnicas de Sustentabilidad</h4>
                            <p class="hidden lg:block text-negro text-sm"><i class="fak fa-espiga"></i> Lorem ipsum</p>
                        </div>
                    </div>
                    <div class="flex space-x-4 lg:space-x-0 lg:block col-span-12 lg:col-span-3 mb-8">
                        <div class="relative w-1/4 lg:w-auto ">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/pan.jpg" alt="pan">
                            <a href="#" class="hidden lg:inline-block text-blanco bg-azul hover:bg-rosado hover:text-fondooscuro transition duration-200 rounded-full absolute bottom-0 right-0 mr-4 mb-4 w-10 h-10 leading-10 text-center">
                                <i class="fak fa-add-bag"></i>
                            </a>
                        </div>
                        <div class="relative lg:mt-3">
                            <p class="hidden lg:block text-beige text-lg lg:text-xl">$12.990</p>
                            <h4 class="text-negro text-xl lg:text-2xl font-bold leading-none my-2 lg:my-3">Técnicas de Sustentabilidad</h4>
                            <p class="hidden lg:block text-negro text-sm"><i class="fak fa-espiga"></i> Lorem ipsum</p>
                        </div>
                    </div>
                    <div class="flex space-x-4 lg:space-x-0 lg:block col-span-12 lg:col-span-3 mb-8">
                        <div class="relative w-1/4 lg:w-auto ">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/pan.jpg" alt="pan">
                            <a href="#" class="hidden lg:inline-block text-blanco bg-azul hover:bg-rosado hover:text-fondooscuro transition duration-200 rounded-full absolute bottom-0 right-0 mr-4 mb-4 w-10 h-10 leading-10 text-center">
                                <i class="fak fa-add-bag"></i>
                            </a>
                        </div>
                        <div class="relative lg:mt-3">
                            <p class="hidden lg:block text-beige text-lg lg:text-xl">$12.990</p>
                            <h4 class="text-negro text-xl lg:text-2xl font-bold leading-none my-2 lg:my-3">Técnicas de Sustentabilidad</h4>
                            <p class="hidden lg:block text-negro text-sm"><i class="fak fa-espiga"></i> Lorem ipsum</p>
                        </div>
                    </div>
                    <div class="flex space-x-4 lg:space-x-0 lg:block col-span-12 lg:col-span-3 mb-8">
                        <div class="relative w-1/4 lg:w-auto ">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/pan.jpg" alt="pan">
                            <a href="#" class="hidden lg:inline-block text-blanco bg-azul hover:bg-rosado hover:text-fondooscuro transition duration-200 rounded-full absolute bottom-0 right-0 mr-4 mb-4 w-10 h-10 leading-10 text-center">
                                <i class="fak fa-add-bag"></i>
                            </a>
                        </div>
                        <div class="relative lg:mt-3">
                            <p class="hidden lg:block text-beige text-lg lg:text-xl">$12.990</p>
                            <h4 class="text-negro text-xl lg:text-2xl font-bold leading-none my-2 lg:my-3">Técnicas de Sustentabilidad</h4>
                            <p class="hidden lg:block text-negro text-sm"><i class="fak fa-espiga"></i> Lorem ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>  

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Seo2/Dropbox/04 - Diseño y Desarrollo/00 - En desarrollo/01 - Sitios/herenciacolectiva/wp-content/themes/mountainbreeze/templates/single-tallerista.blade.php ENDPATH**/ ?>