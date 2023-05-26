<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Henko
 */

?>

<div class="pie-de-pagina">
	<ul class="fila">
		<li><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/svg/Henko_Logo (2).svg' ); ?>"
				alt=""></li>
		<li><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/png/Fundacion_Bertelsmann_Y_Singularity_Experts_Logo.png' ); ?>"
				alt=""></li>
		<li><a href="#">Anaya educación</a></li>
		<li><a href="#">Hablamos de educación</a></li>
	</ul>
	<ul class="fila">
		<li><a href="#">Aviso legal</a></li>
		<li><a href="#">Protección de datos</a></li>
		<li><a href="#">Cookies</a></li>
	</ul>
</div>

<?php wp_footer(); ?>

</body>

</html>