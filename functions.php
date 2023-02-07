<?php
if (!defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_S_VERSION', '1.0.0');
}

/**
 * Breadcrumbs settings.
 */
function jk_woocommerce_breadcrumbs()
{
  return array(
    'delimiter' => ' &mdash; ',
    'wrap_before' => '<div class="brcr">',
    'wrap_after' => '</div>',
    'before' => '<span>',
    'after' => '</span>',
    'home' => _x('My-display', 'breadcrumb', 'woocommerce'),
  );
}
add_filter('woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs');

function add_favicon()
{
  echo '<link rel="shortcut icon" type="image/png" href=' . get_template_directory_uri() . '/assets/favicon.ico />';
}
add_action('wp_head', 'add_favicon');


function systemekb_scripts()
{
  wp_enqueue_style('systemekb-style', get_stylesheet_uri(), array(), _S_VERSION);
  wp_style_add_data('systemekb-style', 'rtl', 'replace');
  // wp_enqueue_script('systemekb-jquery', get_template_directory_uri() . '/assets/libs/jquery-3.6.0/jquery-3.6.0.min.js', array('jquery'), '', true);
  wp_enqueue_script('systemekb-slick', get_template_directory_uri() . '/assets/libs/slick-slider/slick/slick.min.js', array('jquery'), '', true);
  wp_enqueue_script('systemekb-inputmask', get_template_directory_uri() . '/assets/libs/jquery-inputmask/jquery.inputmask.min.js', array('jquery'), '', true);

  wp_enqueue_script('systemekb-app-sliders', get_template_directory_uri() . '/assets/js/sliders.js', array('jquery'), _S_VERSION, true);
  wp_enqueue_script('systemekb-app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), _S_VERSION, true);
  wp_enqueue_script('systemekb-app-tabs', get_template_directory_uri() . '/assets/js/tabs.js', array('jquery'), _S_VERSION, true);
  wp_enqueue_script('systemekb-app-map', get_template_directory_uri() . '/assets/js/map.js', array('jquery'), _S_VERSION, true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'systemekb_scripts');


// carbon-fields
add_action('after_setup_theme', 'crb_load');
function crb_load()
{
  require_once(get_template_directory() . '/inc/carbon-fields/vendor/autoload.php');
  \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'tuning_store_register_fields');
function tuning_store_register_fields()
{
  require get_template_directory() . '/inc/custom-fields-options/theme-options.php';
}

// вырубаем отображение админ панели
add_filter('show_admin_bar', '__return_false');