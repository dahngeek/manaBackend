
{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset class="legend {{empty($item) ? 'New' : 'Edit'}}">
		{!! Former::text('name') !!}
		{!! Former::wysiwyg('content')->inlineHelp("Puede incluir variables que se reemplazan, como {name} y {examples}") !!}
		{!! Former::text('opciones') !!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
