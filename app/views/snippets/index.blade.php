<div class="code-form">
{{ Form::open(array('url'=>'snippets/create', 'class'=>'form')) }}
	<h2>Share Some Code?</h2>

	<!-- LOOP OVER ALL THE ERRORS AND DISPLAY THEM IF THERE ARE ANY -->

	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>

	<!-- TEXT INPUT AREA -->


	{{ Form::text('name', null, array('class'=>'input-block-level', 'placeholder'=>'Name (no spaces, only alphanumeric, dashes, and underscores please!')) }}
	{{ Form::textarea('code', null, array('class'=>'input-block-level', 'placeholder'=>'Your Code Snippet')) }}
	{{ Form::select('lang', array('php'=>'PHP', 'js'=>'Js', 'ruby'=>'Ruby', 'python'=>'Python'), array('class'=>'input-block-level', 'placeholder'=>'Language')) }}

	{{ Form::submit('Share', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}
</div>

<div class="code-display">
	<h2>Most Recent Code</h2>
	<p>You can find the most recently shared snippets below:</p>

	<ul>
		@foreach($snippets as $snippet)
			<li>{{ HTML::link('snippets/view/'.$snippet->slug, $snippet->name) }} 

				<!-- FAVE IT BUTTON ONLY SHOWS UP IF USER IS SIGNED IN -->

				@if(Auth::check())
					 - {{ Form::open(array('url'=>'favorites/create', 'class'=>'form')) }}
						{{ Form::hidden('snippet_id', $snippet->id) }} 
						{{ Form::submit('Fave It!') }}
					{{ Form::close() }}
				@endif
			</li>
		@endforeach
	</ul>
</div>