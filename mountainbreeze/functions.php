<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\View\Factory;
use Illuminate\Events\Dispatcher;
use Illuminate\View\FileViewFinder;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Engines\PhpEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Compilers\BladeCompiler;

$GLOBALS['filesystem'] = new Filesystem;
$GLOBALS['compiler'] = new BladeCompiler($GLOBALS['filesystem'], getCompiledTemplateDirectory());

add_action('init', function() {
    $GLOBALS['compiler']->component('partials.the_loop', 'loop');
});

add_action('wp_enqueue_scripts', function () {
    if (!function_exists('enablejQuery') || !enablejQuery()) {
        wp_deregister_script('jquery');
    }

    wp_enqueue_style('apercupro', get_stylesheet_directory_uri() . '/dist/fonts/apercupro.css?v=2');
    wp_enqueue_style('festivo', get_stylesheet_directory_uri() . '/dist/fonts/festivo.css?v=2');
    wp_enqueue_style('style', get_stylesheet_uri());
    
    wp_enqueue_script('fontawesome', "https://kit.fontawesome.com/a0d8b6c07b.js");
    wp_enqueue_script('alpine-js-defer', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js');
    wp_enqueue_script('app', get_stylesheet_directory_uri() . '/dist/app.js');
});

add_filter('template_include', function ($template) use ($container) {
    $templateName = wp_basename(wp_basename($template, '.php'), '.blade');
    if (getBladeViewFactory($container)->exists($templateName)) {
        $GLOBALS['template_name'] = $templateName;
        $template = __DIR__ . '/../mountainbreeze/index.php';
    }

    return $template;
});

collect([
    'index',
    '404',
    'archive',
    'author',
    'category',
    'tag',
    'taxonomy',
    'date',
    'embed',
    'home',
    'frontpage',
    'privacypolicy',
    'page',
    'paged',
    'search',
    'single',
    'singular',
    'attachment'
])->each(function($type) {
    add_filter("{$type}_template_hierarchy", function($templates) {
        return collect($templates)->map(function($template) {
            $filename = wp_basename($template, '.php');
            return ["templates/$filename.blade.php", $template];
        })->flatten()
          ->toArray();
    });
});

function getBladeViewFactory()
{
    $viewResolver = new EngineResolver;

    $viewResolver->register('blade', function () {
        return new CompilerEngine($GLOBALS['compiler']);
    });

    $viewResolver->register('php', function () {
        return new PhpEngine;
    });

    return new Factory(
        $viewResolver,
        new FileViewFinder($GLOBALS['filesystem'], getTemplateDirectory()),
        new Dispatcher($GLOBALS['container'])
    );
}

function getTemplateDirectory()
{
    return [__DIR__ . '/../templates/'];
}

function getCompiledTemplateDirectory()
{
    return __DIR__ . '/../compiled/';
}


/**
 * Esta función agrega los parámetros "async" y "defer" a recursos de Javascript.
 * Solo se debe agregar "async" o "defer" en cualquier parte del nombre del 
 * recurso (atributo "handle" de la función wp_register_script).
 *
 * @param $tag
 * @param $handle
 *
 * @return mixed
 */
function mg_add_async_defer_attributes( $tag, $handle ) {

	// Busco el valor "async"
	if( strpos( $handle, "async" ) ):
		$tag = str_replace(' src', ' async="async" src', $tag);
	endif;

	// Busco el valor "defer"
	if( strpos( $handle, "defer" ) ):
		$tag = str_replace(' src', ' defer="defer" src', $tag);
	endif;

	return $tag;
}
add_filter('script_loader_tag', 'mg_add_async_defer_attributes', 10, 2);