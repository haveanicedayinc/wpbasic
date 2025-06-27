<?php
/*
Template Name: デフォルトテンプレート
*/

global $post;
$content = apply_filters('the_content', get_the_content());
get_header(); ?>

<?php get_footer(); ?>
