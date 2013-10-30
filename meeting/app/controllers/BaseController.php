<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	protected function validateToken($input = array(), $requestPath = ""){

		if (Session::token() != $input['_token'] )
			throw new  Illuminate\Session\TokenMismatchException;
		unset($input['/'.$requestPath]);
		unset($input['_token']);
		return $input;
		
	}
}