
{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset class="legend {{empty($item) ? 'New' : 'Edit'}}">
		{!! Former::select('cuestionario_id')->options(App\Pagina::cuestionarios_list()) !!}
		{!! Former::text('nombre') !!}
		{!! Former::wysiwyg('description') !!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}


