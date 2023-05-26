<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Henko
 */

get_header();
?>

<?php get_template_part( 'template-parts/banner', 'superior', array() ); ?>

<?php get_template_part( 'template-parts/apartado', 'decisiones', array() ); ?>

<?php get_template_part( 'template-parts/apartado', 'henko', array() ); ?>

<?php get_template_part( 'template-parts/apartado', 'centros-educativos', array() ); ?>

<?php get_template_part( 'template-parts/apartado', 'servicios', array() ); ?>

<?php get_template_part( 'template-parts/apartado', 'video', array() ); ?>

<?php get_template_part( 'template-parts/apartado', 'herramientas-materiales', array() ); ?>

<?php get_template_part( 'template-parts/apartado', 'colaboradores', array() ); ?>

<?php get_template_part( 'template-parts/fila', '', array() ); ?>

<?php get_template_part( 'template-parts/banner', 'inferior', array() ); ?>

<?php
get_footer();