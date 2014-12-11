<?php 

class Snippet extends Eloquent {
	public static $rules = array(
		'name'=>'required|alpha_dash|min:2|unique:snippets',
		'code'=>'required',
		'lang'=>'required|in:php,js,ruby,python');

	public function favorites() {
		return $this->hasMany('Favorite');
	}
}