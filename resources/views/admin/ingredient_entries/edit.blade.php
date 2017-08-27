
{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset>
		<div class="legend">{{empty($item) ? 'New' : 'Edit'}}</div>
		{!! Former::text('title')->label("Nombre") !!}
    {!! Former::wysiwyg('content')->label("Descripcion") !!}
		{!! Former::date('release_date')!!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
