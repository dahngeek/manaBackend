@php
	$sidebar->add(Former::listing('App\IngredientEntry'));
@endphp

{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset>
		<div class="legend">{{empty($item) ? 'New' : 'Edit'}}</div>
		{!! Former::text('name')->label("Nombre") !!}
    {!! Former::wysiwyg('description')->label("Descripcion") !!}
		{!! Former::image()!!}
    {!! Former::boolean('date_based')->label("Basado en Fechas") !!}
		{!! Former::boolean('published')->label("Publicado") !!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
