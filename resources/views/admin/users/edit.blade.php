{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset>
		<div class="legend">{{empty($item) ? 'New' : 'Edit'}}</div>
		{!! Former::text('name')->label("Nombre") !!}
    {!! Former::text('email')->label("Email") !!}
    {!! Former::text('profile_pic')->label("Imagen de Perfil") !!}
    {!! Former::boolean('verified')->label("Verificado") !!}
    {!! Former::text('api_token')->disabled('disabled') !!}
		{!! Former::textarea('short_bio')->label("Biografía") !!}
		{!! Former::date('create_at')->disabled('disabled')->label("Fecha de registro") !!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
