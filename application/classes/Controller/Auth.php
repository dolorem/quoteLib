<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_SuperController 
{
	public $view = 'login';

	public function action_loginrender()
	{
		$this->template->content = View::factory($this->view);
	}

	public function action_logout()
	{
		Auth::instance()->logout();
		$this->redirect('');
	}

	public function action_verify()
	{
		$post = $this->request->post();
		$success = Auth::instance()->login($post['username'], $post['password']);
		if ($success)
		{
			$this->redirect('admin');
		}
		else
		{
			$this->redirect('login');
		}
	}
}
