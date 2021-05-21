<?php
/**
 * Lorem Ipsum Books & Media Store Framework: templates and thumbs management
 *
 * @package	lorem_ipsum_books_media_store
 * @since	lorem_ipsum_books_media_store 1.0
 */

// Disable direct call
if ( ! defined( 'ABSPATH' ) ) { exit; }

// Theme init
if (!function_exists('lorem_ipsum_books_media_store_templates_theme_setup')) {
	add_action( 'lorem_ipsum_books_media_store_action_before_init_theme', 'lorem_ipsum_books_media_store_templates_theme_setup' );
	function lorem_ipsum_books_media_store_templates_theme_setup() {

		// Add custom thumb sizes into media manager
		add_filter( 'image_size_names_choose', 'lorem_ipsum_books_media_store_show_thumb_sizes');
	}
}



/* Templates
-------------------------------------------------------------------------------- */

// Add template (layout name)
if (!function_exists('lorem_ipsum_books_media_store_add_template')) {
	function lorem_ipsum_books_media_store_add_template($tpl) {
		if (empty($tpl['mode']))						$tpl['mode'] = 'blog';
		if (empty($tpl['template']))					$tpl['template'] = $tpl['layout'];
		if (empty($tpl['need_content']))				$tpl['need_content'] = false;
		if (empty($tpl['need_terms']))					$tpl['need_terms'] = false;
		if (empty($tpl['need_columns']))				$tpl['need_columns'] = false;
		if (empty($tpl['need_isotope']))				$tpl['need_isotope'] = false;
		if (!isset($tpl['h_crop']) && isset($tpl['h']))	$tpl['h_crop'] = $tpl['h'];
		lorem_ipsum_books_media_store_storage_set_array('registered_templates', $tpl['layout'], $tpl);
		if (!empty($tpl['thumb_title']) || !empty($tpl['thumb_slug']))
			lorem_ipsum_books_media_store_add_thumb_sizes( $tpl );
		else 
			$tpl['thumb_title'] = '';
	}
}

// Return template file name
if (!function_exists('lorem_ipsum_books_media_store_get_template_name')) {
	function lorem_ipsum_books_media_store_get_template_name($layout_name) {
		$tpl = lorem_ipsum_books_media_store_storage_get_array('registered_templates', $layout_name);
		return !empty($tpl['template']) ? $tpl['template'] : $tpl['layout'];
	}
}

// Return true, if template required content
if (!function_exists('lorem_ipsum_books_media_store_get_template_property')) {
	function lorem_ipsum_books_media_store_get_template_property($layout_name, $what) {
		$tpl = lorem_ipsum_books_media_store_storage_get_array('registered_templates', $layout_name);
		return !empty($tpl[$what]) ? $tpl[$what] : '';
	}
}

// Return template output function name
if (!function_exists('lorem_ipsum_books_media_store_get_template_function_name')) {
	function lorem_ipsum_books_media_store_get_template_function_name($layout_name) {
		$tpl = lorem_ipsum_books_media_store_storage_get_array('registered_templates', $layout_name);
		return 'lorem_ipsum_books_media_store_template_'.str_replace(array('-', '.'), '_', $tpl['template']).'_output';
	}
}

// Set template arguments
if (!function_exists('lorem_ipsum_books_media_store_template_set_args')) {
	function lorem_ipsum_books_media_store_template_set_args($tpl, $args) {
		lorem_ipsum_books_media_store_storage_push_array('call_args', $tpl, $args);
	}
}


// Get template arguments
if (!function_exists('lorem_ipsum_books_media_store_template_get_args')) {
	function lorem_ipsum_books_media_store_template_get_args($tpl) {
		return lorem_ipsum_books_media_store_storage_pop_array('call_args', $tpl, array());
	}
}


// Look for last template arguments (without removing it from storage)
if (!function_exists('lorem_ipsum_books_media_store_template_last_args')) {
	function lorem_ipsum_books_media_store_template_last_args($tpl) {
		$args = lorem_ipsum_books_media_store_storage_get_array('call_args', $tpl, array());
		return is_array($args) ? array_pop($args) : array();
	}
}


/* Thumbs
-------------------------------------------------------------------------------- */

// Add image dimensions with layout name
if (!function_exists('lorem_ipsum_books_media_store_add_thumb_sizes')) {
	function lorem_ipsum_books_media_store_add_thumb_sizes($sizes) {
		static $mult = 0;
		if ($mult == 0) $mult = min(4, max(1, lorem_ipsum_books_media_store_get_theme_option("retina_ready")));
		if (!isset($sizes['h_crop']))		$sizes['h_crop'] =  isset($sizes['h']) ? $sizes['h'] : null;
				if (empty($sizes['thumb_title']))	$sizes['thumb_title'] = lorem_ipsum_books_media_store_strtoproper(!empty($sizes['layout']) ? $sizes['layout'] : $sizes['thumb_slug']);
		$thumb_slug = !empty($sizes['thumb_slug']) ? $sizes['thumb_slug'] : lorem_ipsum_books_media_store_get_slug($sizes['thumb_title']);
		if (empty($sizes['layout']))		$sizes['layout'] = $thumb_slug;
		if (lorem_ipsum_books_media_store_storage_get_array('thumb_sizes', $thumb_slug)=='') {
			lorem_ipsum_books_media_store_storage_set_array('thumb_sizes', $thumb_slug, $sizes);
			// Register WP thumb size
			if (lorem_ipsum_books_media_store_get_theme_setting('add_image_size') && (!isset($sizes['add_image_size']) || $sizes['add_image_size'])) {
				// Image thumb and retina version
				add_image_size( 'lorem_ipsum_books_media_store-'.$thumb_slug, $sizes['w'], $sizes['h'], $sizes['h']!=null );
				if ($mult > 1)
					add_image_size( 'lorem_ipsum_books_media_store-'.$thumb_slug.'-@retina', $sizes['w'] ? $sizes['w']*$mult : $sizes['w'], $sizes['h'] ? $sizes['h']*$mult : $sizes['h'], $sizes['h']!=null );
				// Cropped image thumb and retina version
				if ($sizes['h']!=$sizes['h_crop']) {
					add_image_size( 'lorem_ipsum_books_media_store-'.$thumb_slug.'_crop', $sizes['w'], $sizes['h_crop'], true );
					if ($mult > 1) 
						add_image_size( 'lorem_ipsum_books_media_store-'.$thumb_slug.'_crop-@retina', $sizes['w'] ? $sizes['w']*$mult : $sizes['w'], $sizes['h_crop'] ? $sizes['h_crop']*$mult : $sizes['h_crop'], true );
				}
			}
		}
	}
}

// Return image dimensions
if (!function_exists('lorem_ipsum_books_media_store_get_thumb_sizes')) {
	function lorem_ipsum_books_media_store_get_thumb_sizes($opt) {
		$opt = array_merge(array(
			'layout' => 'excerpt',
			'thumb_slug' => ''
		), $opt);
		$tpl = lorem_ipsum_books_media_store_storage_get_array('registered_templates', $opt['layout']);
		$thumb_slug = !empty($opt['thumb_slug']) 
						? $opt['thumb_slug'] 
						: (empty($tpl['thumb_slug']) 
							? (empty($tpl['thumb_title']) 
								? '' 
								: lorem_ipsum_books_media_store_get_slug($tpl['thumb_title'])
								) 
							: lorem_ipsum_books_media_store_get_slug($tpl['thumb_slug'])
							);
		$thumb_size = lorem_ipsum_books_media_store_storage_get_array('thumb_sizes', $thumb_slug);
		return !empty($thumb_size) ? $thumb_size : array('w'=>null, 'h'=>null, 'h_crop'=>null);
	}
}

// Show custom thumb sizes into media manager sizes list
if (!function_exists('lorem_ipsum_books_media_store_show_thumb_sizes')) {
	function lorem_ipsum_books_media_store_show_thumb_sizes( $sizes ) {
		$thumb_sizes = lorem_ipsum_books_media_store_storage_get('thumb_sizes');
		if (is_array($thumb_sizes) && count($thumb_sizes) > 0) {
			$rez = array();
			foreach ($thumb_sizes as $k=>$v)
				$rez[$k] = !empty($v['thumb_title']) ? $v['thumb_title'] : $k;
			$sizes = array_merge( $sizes, $rez);
		}
		return $sizes;
	}
}

// AJAX callback: Get attachment url
if ( !function_exists( 'lorem_ipsum_books_media_store_callback_get_attachment_url' ) ) {
	function lorem_ipsum_books_media_store_callback_get_attachment_url() {
		if ( !wp_verify_nonce( lorem_ipsum_books_media_store_get_value_gp('nonce'), admin_url('admin-ajax.php') ) )
			wp_die();
	
		$response = array('error'=>'');
		
		$id = (int) lorem_ipsum_books_media_store_get_value_gp('attachment_id');
		
		$response['data'] = wp_get_attachment_url($id);
		
		echo json_encode($response);
		wp_die();
	}
}
?>