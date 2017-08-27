@php
	$sidebar->add(Former::listing('App\Ingredient'));
@endphp


{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset>
		<div class="legend">{{empty($item) ? 'New' : 'Edit'}}</div>
		{!! Former::select('mana_user_id')->options(App\User::users_list())->label("Autor") !!}
		{!! Former::text('name')->label("Nombre") !!}
    {!! Former::wysiwyg('description')->label("Descripcion") !!}
		{!! Former::image()!!}
    {!! Former::boolean('active')->label("Activo") !!}
		{!! Former::boolean('published')->label("Publicado") !!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
