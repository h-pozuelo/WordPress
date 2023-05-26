<?php
?>

<div class="banner-superior">
	<div class="cuadricula">
		<div class="celda">
			<h1>Tus decisiones son únicas</h1>
		</div>
		<div class="celda"></div>
		<div class="celda"></div>
		<div class="celda"></div>
		<div class="celda"></div>
		<div class="celda"></div>
		<div class="celda"></div>
		<div class="celda"></div>
		<div class="celda"></div>
		<div class="celda"></div>
		<div class="celda mostrar-movil"></div>
		<div class="celda mostrar-movil"></div>
		<div class="celda mostrar-movil"></div>
	</div>
	<div class="fila">
		<div class="columna-izquierda animacion-deslizar-arriba">
			<div class="mas-informacion">
				<p>Lorem ipsum dolor sit amet consectetur. Dictum eu vestibulum tincidunt pulvinar ut consequat.</p>
				<button onclick="mostrarFormulario()">MÁS INFORMACIÓN</button>
			</div>
		</div>
		<div class="columna-derecha animacion-deslizar-izquierda">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/png/mujer_pelo_rubio.png' ); ?>"
				alt="">
		</div>
		<div class="formulario">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/svg/cerrar.svg' ); ?>" alt=""
				onclick="ocultarFormulario()">
			<form action="#" method="post">
				<h1>Lorem ipsum dolor</h1>
				<p>Lorem ipsum dolor sit amet consectetur. Dictum eu vestibulum tincidunt pulvinar ut consequat.</p>
				<div class="cuadricula">
					<div class="campo">
						<input type="text" name="nombre" id="" placeholder="Nombre" required>
					</div>
					<div class="campo">
						<select name="tipo" id="" required>
							<option value="" disabled selected hidden>Tipo</option>
							<option value="director">Director/a</option>
							<option value="orientador">Orientador/a</option>
							<option value="profesor">Profesor/a</option>
							<option value="alumno">Alumno/a</option>
							<option value="tutor">Padre/madre - tutor/a</option>
						</select>
					</div>
					<div class="campo">
						<input type="email" name="email" id="" placeholder="Email" required>
					</div>
					<div class="campo">
						<input type="number" name="codigo-postal" id="" placeholder="Código Postal" required>
					</div>
					<div class="campo">
						<select name="perfil" id="" required>
							<option value="" disabled selected hidden>Perfil</option>
							<option value="concertado">Concertado</option>
							<option value="privado">Privado</option>
							<option value="publico">Público</option>
						</select>
					</div>
					<div class="campo">
						<textarea name="comentarios" id="" cols="30" rows="10" placeholder="Comentarios"></textarea>
					</div>
					<div class="campo">
						<input type="text" name="colegio" id="" placeholder="Colegio" required>
					</div>
					<div class="campo">
						<input type="checkbox" name="proteccion-de-datos" id="" required>
						<label for="proteccion-de-datos">He leído la Política de Protección de datos</label>
					</div>
					<input type="submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>
</div>