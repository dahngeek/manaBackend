
{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset>
		<div class="legend">Porcion</div>
		{!! Former::text('name')->label("Nombre") !!}
		{!! Former::text('options')->label("Opciones Adicionales")->inlineHelp("Aún no tiene uso") !!}
		{!! Former::image()->label("Imagen") !!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
