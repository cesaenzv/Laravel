<?php
//use App\DbRepositorys;


class UserController extends BaseController{

	/*Definicion de objetos de dominio*/
	protected $user;

	public function __construct (UserRepository $userRepository){
		$this->user = $userRepository;
	}

	public function index(){
		return View::make('user.index');
	}

	public function store(){
		//$input = InputHandler::validateToken(Input::all(), Request::path());		
		//var_dump(new InputHandler);
		if(count(Input::all())>1){
			$newUser =  $this->user->create($this->validateToken(Input::all(), Request::path()));
			if($newUser::saved())
				return Redirect::route('home')->with('msg','Usuario creado satisfactoriamente.');
			else
				return Redirect::route('home')->withInput()->withErrors($newUser->errors());
		}
		return View::make('user.register');
	}

	private function validateToken($input = array(), $requestPath = ""){
		if (Session::token() != $input['_token'] )
			throw new  Illuminate\Session\TokenMismatchException;
		unset($input['/'.$requestPath]);
		unset($input['_token']);
		return $input;
	}
}