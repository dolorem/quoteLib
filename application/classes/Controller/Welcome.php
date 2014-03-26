<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_SuperController {
	public $view = 'Example';

	public function action_index()
	{
		$quote = ORM::factory('Quote')->where('quoteId', '=', '1')->find();
		$view = View::factory($this->view)
			->set('quote', $quote)
			->set('tags', $quote->tags->find_all())
			->set('title', 'Home');
		$this->response->body($view);
	}

}
