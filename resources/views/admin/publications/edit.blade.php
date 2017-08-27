
{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset>
		<div class="legend">{{empty($item) ? 'New' : 'Edit'}}</div>
		{!! Former::select('user_id')->options(App\User::users_list())->label("Autor") !!}
		{!! Former::select('publication_type_id')->options(App\PublicationType::publicationtype_list())->label("Tipo de Publicación") !!}
    {!! Former::wysiwyg('content')->label("Contenido") !!}
		{!! Former::string('secondary_title')->label("Titulo Secundario") !!}
		{!! Former::string('external_link')->label("Enlace") !!}
		{!! Former::string('link_text')->label("Texto del Enlace") !!}
		{!! Former::image() !!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
