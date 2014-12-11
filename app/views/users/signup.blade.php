	<!-- FORM OPEN GOES TO POST SIGNUP ACTION IN THE USERSCONTROLLER -->
	
{{ Form::open(array('url'=>'users/signup', 'class'=>'form-signup')) }} 
	<h2 class="form-signup-heading">Sign Up</h2>


	<!-- DISPLAYS VALIDATION ERRORS -->

	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>

	<!-- FORM FIELDS -->

	{{ Form::text('username', null, array('class'=>'input-block-level', 'placeholder'=>'Username')) }}
	{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
	{{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}

	<!-- FORM SUBMIT -->

	{{ Form::submit('Sign Up', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}