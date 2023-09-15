<?php

class Home extends Controller {
	

	public function index()
	{
		$this->view('landing-page/index');
	}
}