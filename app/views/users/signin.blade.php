	<!-- FORM OPEN GOES TO POST SIGNIN ACTION IN THE USERSCONTROLLER -->
	
{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }} 
	<h2 class="form-signin-heading">Sign In</h2>


	<!-- FORM FIELDS -->

	{{ Form::text('username', null, array('class'=>'input-block-level', 'placeholder'=>'Username')) }}
	{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
	{{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}

	<!-- FORM SUBMIT -->

	{{ Form::submit('Sign In', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}