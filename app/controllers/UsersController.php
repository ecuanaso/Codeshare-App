<?php 
	
class UsersController extends BaseController {

	public function __construct() {
		$this->beforeFilter('csrf',  array('on' => 'post' ));
	}

	/** THIS ACTION HANDLES THE SIGNUP FORM **/

	public function getSignup(){
		$this->layout->content = View::make('users.signup');
	}

	/** THIS ACTION PROCESSES THE FORM SUBMISSION **/

	public function postSignup() {
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
			$user = new User;
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::to('users/signin')->with('message', 'Thanks for signing up!');
		} else {
			return Redirect::to('users/signup')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
		}
	}
	

	/** THIS ACTION DISPLAYS THE SIGNIN FORM **/

	public function getSignin(){
		$this->layout->content = View::make('users.signin');
	}

	/** THIS ACTION PROCESSES THE SIGNIN FORMS SUBMISSION **/


	public function postSignin() {
		if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
			return Redirect::to('/')->with('message', 'You are now signed in!');
		} else {
			return Redirect::to('users/signin')
				->with('message', 'Your username/password combination was incorrect')
				->withInput();
		}
	}

	/** THIS ACTION HANDLES THE SIGNOUT FORM **/

	public function getSignout() {
		Auth::logout();
		return Redirect::to('users/signin')->with('message', 'Your are now signed out!');
	}

} // END OF USER CONTROLLER CLASS
