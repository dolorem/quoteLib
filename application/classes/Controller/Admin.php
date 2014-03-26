<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_SuperController 
{
	public $view = 'admin';

	public function before()
	{
		parent::before();
		if (!Auth::instance()->logged_in())
			$this->redirect('/index.php/login');
		if ($this->request->is_ajax())
			$this->auto_render = FALSE;
	}

	public function action_index()
	{
		$tags = ORM::factory('Tag')->order_by('title', 'ASC')->find_all();
		$content = View::factory($this->view)
			->set('tagMultiselect', $this->createTagMultiselect())
			->set('tags', $tags);
		$this->template->content = $content;
	}

	public function action_addTag()
	{
		$post = $this->request->post();
		$tag = ORM::factory('Tag');
		$tag->title = $post['title'];
		$tag->save();
		$this->redirect('admin');
	}

	public function action_addArticle()
	{
		$post = $this->request->post();
		$quote = ORM::factory('Quote');
		$quote->author = $post['author'];
		$quote->content = $post['content'];
		$quote->source = $post['source'];
		$quote->save();
		foreach ($post['tags'] as $tag)
		{
			$tag = ORM::factory('Tag')->where('tagId', '=', $tag)->find();
			$quote->add('tags', $tag);
		}
		$quote->save();
		$this->redirect('admin');
	}

	public function action_deleteTag()
	{
		$tag = ORM::factory('Tag')->where('tagId', '=', $_GET['id'])->find();
		$tag->delete();
		$this->redirect('admin');
	}

	public function action_getTag()
	{
		$tag = ORM::factory('Tag')->where('tagId', '=', $_GET['id'])->find();
		$this->auto_render = FALSE;
		$this->response->headers(array('Content-Type' => 'application/json'))->body(json_encode($tag->as_array()));
	}

	public function action_editTag()
	{
		$post = $this->request->post();
		$tag = ORM::factory('Tag')->where('tagId', '=', $post['id'])->find();
		$tag->title = $post['title'];
		$tag->update();
		$this->redirect('admin');
	}

	public function createTagMultiselect()
	{
		$select = '<select multiple="multiple" name="tags[]">';
		$tags = ORM::factory('Tag')->order_by('title', 'ASC')->find_all();
		foreach ($tags as $tag)
			$select .= '<option value="'.$tag->tagId.'">'.$tag->title.'</option>';
		$select .= '</select>';
		return $select;
	}
}
