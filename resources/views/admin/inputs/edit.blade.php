
{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset class="legend {{empty($item) ? 'New' : 'Edit'}}">
		{!! Former::select('page_id')->options(App\Input::paginas_list()) !!}
		{!! Former::select('type_id')->options(App\Input::type_list()) !!}
		{!! Former::text('titulo') !!}
		{!! Former::wysiwyg('contenido') !!}
		{!! Former::text('options') !!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
