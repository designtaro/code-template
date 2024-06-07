<?php
/*
Template Name: Nuxt Template
*/
get_header(); ?>

<div id="__nuxt"></div>

<?php
// Nuxt 3のビルド出力からCSSとJSを読み込む
$dist_dir = get_template_directory_uri() . '/nuxt-app';
echo '<link rel="stylesheet" href="' . $dist_dir . '/_nuxt/entry.css">';
echo '<script src="' . $dist_dir . '/_nuxt/entry.js" defer></script>';

get_footer();
?>
