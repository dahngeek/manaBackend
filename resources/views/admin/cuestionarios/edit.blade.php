@php
    $sidebar->add( Former::text('slug') )
@endphp

{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset class="legend {{empty($item) ? 'New' : 'Edit'}}">
		{!! Former::text('nombre') !!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
