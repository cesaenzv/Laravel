<?php

interface Observer {

	public function saved($model);
}


class BaseObserver implements Observer {

	public function saved($model){
		if($model)
			return true;
		else
			return false;
	}
}


class UserObserver extends BaseObserver {
	public function saved($model){
		if($model)
			return true;
		else
			return false;
	}	
}