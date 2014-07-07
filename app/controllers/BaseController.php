<?php

class BaseController extends Controller {

	//to protect from cross site request forgery (csrf)
	public function __construct()
	{
		$this->beforeFilter('csrf', array('on'=>['post', 'delete', 'put']) );
	}

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

}
