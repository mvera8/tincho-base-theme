<?php
/**
 * Template Part: Form Servicios
 */

defined( 'ABSPATH' ) || exit;

// Arrays de opciones
$frecuencia = array(
	'Lunes a viernes',
	'3 veces por semana',
	'2 veces por semana',
	'1 vez por semana',
	'Quincenal',
	'Única vez',
);

$horarios = array(
	'9 a 13',
	'14 a 18',
	'18 a 22',
	'9 a 18',
);

// Helper para checkboxes Bootstrap
function checkbox_bootstrap( $label, $name = 'opcion[]' ) {
	$id = sanitize_title( $label ) . '_' . wp_rand( 100, 999 );
	return '
		<div class="form-check mb-2">
			<input type="checkbox" class="form-check-input" id="'.esc_attr($id).'" name="'.esc_attr($name).'" value="'.esc_attr($label).'">
			<label class="form-check-label" for="'.esc_attr($id).'">'.esc_html($label).'</label>
		</div>
	';
}
?>

<div id="formulario" class="p-5 rounded border bg-white mb-4">
	<form action="">
		<div class="row mb-3">
			<div class="col">
				<label for="nombre" class="form-label">Nombre y Apellido</label>
				<input type="text" class="form-control" aria-label="Nombre" id="nombre">
			</div>
			<div class="col">
				<label for="email" class="form-label">Email</label>
				<input type="email" class="form-control" id="email" placeholder="name@example.com">
			</div>
		</div>

		<div class="row mb-3">
			<div class="col">
				<label for="phone" class="form-label">Celular</label>
				<input type="text" class="form-control" id="phone">
			</div>
			<div class="col">
				<label for="empresa" class="form-label">Empresa o razón social</label>
				<input type="text" class="form-control" aria-label="Empresa" id="empresa">
			</div>
		</div>

		<div class="mb-3">
			<label for="direccion" class="form-label">Dirección</label>
			<input type="text" class="form-control" aria-label="Dirección" id="direccion">
		</div>

		<div class="mb-3">
			<label for="servicio" class="form-label">Seleccione el servicio que requiere</label>
			<select class="form-select" id="servicio" aria-label="Seleccione el servicio">
				<option selected>- Seleccione el servicio -</option>
				<option value="hogares">Limpieza de hogares</option>
				<option value="oficinas">Limpieza de oficinas / empresas</option>
				<option value="edificios">Limpieza de edificios / condominios</option>
				<option value="locales">Limpieza de locales comerciales</option>
				<option value="profunda">Limpieza profunda (única vez)</option>
				<option value="vidrios">Limpieza de ventanales / vidrios grandes</option>
			</select>
		</div>

		<div class="row mb-3">
			<div class="col">
				<label class="form-label">Frecuencia del servicio</label>
				<?php foreach ( $frecuencia as $f ) {
					echo checkbox_bootstrap( $f, 'frecuencia[]' );
				} ?>
			</div>
			<div class="col">
				<label class="form-label">Horario de preferencia</label>
				<?php foreach ( $horarios as $h ) {
					echo checkbox_bootstrap( $h, 'horarios[]' );
				} ?>
			</div>
		</div>

		<div class="mb-3">
			<label for="comentarios" class="form-label">Queremos conocerte! Comentanos brevemente cómo podemos ayudarte.</label>
			<textarea class="form-control" id="comentarios" rows="3"></textarea>
		</div>

		<button type="submit" class="btn btn-primary btn-lg d-block w-100">Enviar Formulario</button>
	</form>
</div>

<div class="alert alert-success" role="alert">
	Mensaje enviado exitosamente! Nos pondremos en contacto contigo a la brevedad! Cleanmax soluciones de limpieza.
</div>

<div class="alert alert-danger" role="alert">
  Hubo un error con el mensaje
</div>
