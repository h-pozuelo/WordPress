<?php
?>

<div class="conjunto">
	<div class="banner">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/png/Banner_Fondo.png' ); ?>" alt=""
			class="fondo">
	</div>
	<div class="conjunto-formulario">
		<h1>HAZTE SOCIO Y LLÉVATE&nbsp;
			<span>10€ DE REGALO</span>
		</h1>
		<div class="fila">
			<form action="" class="formulario columna">
				<input type="email" name="email" id="" placeholder="Correo electrónico" required>
				<div class="fila">
					<input type="checkbox" name="condiciones" id="" required>
					<label for="condiciones">He leído y acepto las <a href="#">Condiciones generales</a>, la <a
							href="#">Política de privacidad</a> y la <a href="#">Política de cookies</a>.</label>
				</div>
				<p>Al crear tu cuenta aceptas recibir las mejores ofertas de vino y destilados en tu email.</p>
				<input type="submit" value="REGÍSTRATE">
			</form>
			<div class="columna">
				<p>¿Ya tienes cuenta? <a href="#">Inicia sesión</a></p>
				<button>Continuar con Facebook</button>
			</div>
		</div>
		<p>Al crear tu cuenta aceptas recibir las mejores ofertas de vino y destilados en tu email.</p>
	</div>
</div>