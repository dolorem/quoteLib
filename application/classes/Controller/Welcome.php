<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$quote = ORM::factory('Quote')->where('quoteId', '=', '1')->find();
		$view = View::factory('Example')->set('quote', $quote)->set('tags', $quote->tags->find_all());
		$this->response->body($view);
	}

}
