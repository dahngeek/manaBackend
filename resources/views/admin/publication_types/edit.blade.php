
{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset>
		<div class="legend">{{empty($item) ? 'New' : 'Edit'}}</div>
		{!! Former::text('name')->label("Nombre") !!}
    {!! Former::text('description')->label("Descripcion") !!}
		{!! Former::image()->label("Imagen Representativa")!!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
