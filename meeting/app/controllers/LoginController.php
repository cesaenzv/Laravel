<?php


class LoginController extends BaseController {

	protected $users;

	public function _construct (UserRepositoryInterface $users){
		$this->users = $users;
	}


	public function anyIndex(){
		return View::make('home');
	}

	public function postLogIn(){
		if (Input::server("REQUEST_METHOD") == "POST")
        {
            $validator = Validator::make(Input::all(), [
                "username" => "required",
                "password" => "required"
            ]);
            
            if ($validator->passes())
            {
                $credentials = array(
                	'username' =>Input::get('username'), 
                	'password'=>Input::get('password')
                	);
                var_dump(Input::all());
                var_dump(Auth::attempt($credentials,true));
                die();
                if (Auth::attempt($credentials))
                {
                    return Redirect::route("/usuario");
                }
            }
            return Redirect::route('login')->withErrors($validator);

        }
        return Redirect::route('login');
	}
	

}