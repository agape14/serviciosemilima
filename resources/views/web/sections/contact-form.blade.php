<form class="card rounded-5 border-0">
	<div class="card-body @if(isset($contact_form_color)){{ $contact_form_color }}@else{{ 'bg-secondary' }}@endif rounded-5 py-4 px-5">
		<h2 class="fs-6 @if(isset($contact_title_color)){{ $contact_title_color }}@else{{ 'text-yellow' }}@endif fw-bolder text-uppercase mb-3">Contactanos</h2>

		<div class="row gy-3">
			<div class="col-12 col-md-6 col-lg-6">
				<label for="social_reason" class="form-label @if(isset($contact_label_color)){{ $contact_label_color }}@else{{ 'text-white' }}@endif">Razón social:</label>
				<input type="text" name="social_reason" class="form-control" placeholder="Razón social" required id="social_reason">
			</div>

			<div class="col-12 col-md-6 col-lg-6">
				<label for="dni" class="form-label @if(isset($contact_label_color)){{ $contact_label_color }}@else{{ 'text-white' }}@endif">DNI:</label>
				<input type="text" name="dni" class="form-control" placeholder="DNI" required id="dni">
			</div>

			<div class="col-12 col-md-6 col-lg-6">
				<label for="name" class="form-label @if(isset($contact_label_color)){{ $contact_label_color }}@else{{ 'text-white' }}@endif">Nombres:</label>
				<input type="text" name="name" class="form-control" placeholder="Nombres" required id="name">
			</div>

			<div class="col-12 col-md-6 col-lg-6">
				<label for="lastname" class="form-label @if(isset($contact_label_color)){{ $contact_label_color }}@else{{ 'text-white' }}@endif">Apellidos:</label>
				<input type="text" name="lastname" class="form-control" placeholder="Apellidos" required id="lastname">
			</div>

			<div class="col-12 col-md-6 col-lg-6">
				<label for="email" class="form-label @if(isset($contact_label_color)){{ $contact_label_color }}@else{{ 'text-white' }}@endif">Email:</label>
				<input type="email" name="email" class="form-control" placeholder="Email" required id="email">
			</div>

			<div class="col-12 col-md-6 col-lg-6">
				<label for="phone" class="form-label @if(isset($contact_label_color)){{ $contact_label_color }}@else{{ 'text-white' }}@endif">Teléfono:</label>
				<input type="text" name="phone" class="form-control" placeholder="Teléfono" required id="phone">
			</div>

			<div class="col-12 col-md-6 col-lg-6">
				<label for="address" class="form-label @if(isset($contact_label_color)){{ $contact_label_color }}@else{{ 'text-white' }}@endif">Dirección:</label>
				<input type="text" name="address" class="form-control" placeholder="Dirección" required id="address">
			</div>

			<div class="col-12 col-md-6 col-lg-6">
				<label for="district" class="form-label @if(isset($contact_label_color)){{ $contact_label_color }}@else{{ 'text-white' }}@endif">Distrito:</label>
				<input type="text" name="district" class="form-control" placeholder="Distrito" required id="district">
			</div>

			<div class="col-12">
				<label for="description" class="form-label @if(isset($contact_label_color)){{ $contact_label_color }}@else{{ 'text-white' }}@endif">Descripción de la consulta:</label>
				<textarea name="description" class="form-control" placeholder="Descripción de la consulta" required rows="4" id="description"></textarea>
			</div>

			<div class="col-12">
				<label for="file" class="form-label @if(isset($contact_label_file_color)){{ $contact_label_file_color }}@else{{ 'text-yellow' }}@endif pointer mb-0"><i class="bi bi-file-earmark"></i> Adjuntar documentos necesarios para el análisis de su solicitud</label>
				<input type="file" name="file" class="d-none" id="file">
			</div>

			<div class="col-12">
				<button type="submit" class="btn btn-lg @if(isset($contact_btn_color)){{ $contact_btn_color }}@else{{ 'btn-warning' }}@endif fw-bolder w-100">Enviar solicitud</button>
			</div>

			@if(isset($contact_form_note))
			<div class="col-12">
				<p class="text-white lh-sm mb-0">{{ $contact_form_note }}</p>
			</div>
			@endif
		</div>
	</div>
</form>