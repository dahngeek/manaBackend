@php
	$sidebar->add(Former::listing('App\Portion'));
@endphp 

{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset>
		<div class="legend">Informacion</div>
		{{--  {!! Former::select('pagina_id')->label("Pagina")->options(App\FoodQuestion::paginas_list()) !!}  --}}
		{!! Former::text('name')->label("Nombre") !!}
		{!! Former::text('examples')->label("Ejemplos de alimentos")->inlineHelp("Separados por coma.") !!}
		{!! Former::image()->label("Imagen") !!}
	</fieldset>

	<fieldset>
		<div class="legend">Frecuencia</div>
		{!! Former::select('frequency_template_id')->options(App\FoodQuestion::frequency_template_list())->label("Plantilla pregunta") !!}
		{!! Former::wysiwyg('content')->label("Contenido adicional a la pregunta")->inlineHelp('Incluya ... No incluya') !!}
	</fieldset>

	<fieldset>
		<div class="legend">Porciones</div>
		{!! Former::select('portion_template_id')->options(App\FoodQuestion::portion_template_list())->label("Plantilla porciones") !!}
		{!! Former::wysiwyg('portions_content')->label("Texto de las Porciones")->inlineHelp("1 Porcion equivale a... ") !!}
	</fieldset>

	<fieldset>
		<div class="legend">Tipos De Producto</div>
		{!! Former::boolean('hasTypes')->label("Tiene tipos?")->message('Tiene diferentes tipos de alimentos') !!}
		{!! Former::wysiwyg('types_text')->label('Texto de la seleción de Tipos de alimento')->inlineHelp('Ejemplo: "Mayormente consume gaseosa:"') !!}
		{!! Former::string('types_text')->label('Tipos')->inlineHelp('Separados por coma: Normal, Light') !!}
	</fieldset>
{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
