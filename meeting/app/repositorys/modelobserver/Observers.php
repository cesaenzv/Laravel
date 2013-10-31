<?php

abstract class BaseObserver {

	abstract function saved($model);	
}


class UserObserver extends BaseObserver {

	public function saved($model){
		if($model)
			return true;
		else
			return false;
	}

}