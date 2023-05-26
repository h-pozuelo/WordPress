<?php
?>

<div class="celda">
	<img src="<?php echo esc_url( get_template_directory_uri() . $args['imagen'] ); ?>" alt="">
	<h2>
		<?php echo $args['titulo']; ?>
	</h2>
	<p>
		<?php echo $args['parrafo']; ?>
	</p>
</div>