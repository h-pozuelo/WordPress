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
 * @package Bodeboca
 */

get_header();
?>

<?php get_template_part( 'template-parts/conjunto', '', array() ); ?>

<h1>CUANDO ELIGES BODEBOCA NUNCA VAS A CIEGAS</h1>

<?php get_template_part( 'template-parts/cuadricula', '', array() ); ?>

<?php
get_footer();