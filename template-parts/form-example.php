<?php
/**
 * Template Part: Form Example
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div id="formulario" class="p-5 rounded border bg-white">
	<h3 class="mb-4 text-capitalize">Completar el formulario</h3>
	<form action="">
		<div class="row mb-3">
			<div class="col">
				<label for="nombre" class="form-label">Nombre</label>
				<input type="text" class="form-control" aria-label="Nombre" id="nombre">
			</div>
			<div class="col">
				<label for="apellido" class="form-label">Apellido</label>
				<input type="text" class="form-control" aria-label="Apellido" id="apellido">
			</div>
		</div>

		<div class="row mb-3">
			<div class="col">
				<label for="exampleFormControlInput1" class="form-label">Email</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>
			<div class="col">
				<label for="phone" class="form-label">Celular</label>
				<input type="text" class="form-control" id="myDateInput">
			</div>
		</div>

		<div class="row mb-3">
			<div class="col">
				<label for="fecha" class="form-label">Fecha de nacimiento</label>
				<input type="text" class="form-control" id="myDateInput" placeholder="dd/mm/aaaa">
			</div>
			<div class="col">
				<label for="Barrio" class="form-label">Barrio</label>
				<input type="text" class="form-control" aria-label="Barrio" id="Barrio">
			</div>
		</div>

		<div class="mb-3">
				<label for="direccion" class="form-label">Dirección</label>
				<input type="text" class="form-control" aria-label="Dirección" id="direccion">
		</div>

		<div class="mb-3">
		<label class="form-label">Carné de Salud</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
				<label class="form-check-label" for="exampleRadios1">
					Si
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
				<label class="form-check-label" for="exampleRadios2">
					No
				</label>
			</div>
		</div>

		<div class="mb-3">
			<label for="formFile" class="form-label">Subir CV</label>
			<input class="form-control bg-primary-light" type="file" id="formFile">
		</div>

		<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>

		<button type="submit" class="btn btn-primary btn-lg">Enviar Formulario</button>
	</form>
</div>