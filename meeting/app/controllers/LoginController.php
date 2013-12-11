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
            $validator = Validator::make(Input::all(), array(
                "username" => "Required",
                "password" => "Required"
            ));
            
            if ($validator->passes())
            {   
                $credentials = array(
                	'username'=>Input::get('username'), 
                	'password'=>Input::get('password')
            	);
                if (Auth::attempt($credentials,true))
                {
                    return Redirect::to("/usuario");
                }

            }
            return Redirect::route('login')->withErrors($validator);

        }
        return Redirect::route('login');
	}

    public function anyLogOut(){
        Auth::logout();
        return Redirect::route('login');
    }	

}