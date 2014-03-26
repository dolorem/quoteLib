<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_SuperController 
{
	public $view = 'admin';

	public function before()
	{
		parent::before();
		if (!Auth::instance()->logged_in())
			$this->redirect('/index.php/login');
	}

	public function action_index()
	{
		$this->template->content = View::factory($this->view);
	}

	public function action_addTag()
	{
		$post = $this->request->post();
		$tag = ORM::factory('Tag');
		$tag->title = $post['title'];
		$tag->save();
		$this->redirect('admin');
	}
}
