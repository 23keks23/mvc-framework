<?php
// контролер
Class Controller_Index Extends Controller_Base {
	// экшен
	function index() {
		$model = new Model_Users();
		$userInfo = $model->getUser();

		$this->template->vars('userInfo', $userInfo);

		$this->template->view('home');
	}
	
}