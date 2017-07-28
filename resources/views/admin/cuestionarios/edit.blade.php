@php
  if(!empty($item)){
		$sidebar->add('<fieldset><div class="legend">Slug</div>');
		$sidebar->add( Former::text('slug')->label("")->disabled('disabled') );
		$sidebar->add("</fieldset>");
	}
	$sidebar->add(Former::listing('App\Pagina'));
@endphp

{!! View::make('decoy::shared.form._header', $__data)->render() !!}
	<fieldset class="legend {{empty($item) ? 'New' : 'Edit'}}">
		{!! Former::text('nombre') !!}
	</fieldset>

{!! View::make('decoy::shared.form._footer', $__data)->render() !!}
