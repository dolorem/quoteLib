<?php defined('SYSPATH') or die('No direct script access.');

class Controller_SuperController extends Controller_Template {
	public $template = 'Example';

	public function before()
	{
		parent::before();
		$this->template->loggedIn = Auth::instance()->logged_in();
		$this->template->title = '';
		$this->template->content = '';
	}

	public function after()
	{
		parent::after();
	}
}
