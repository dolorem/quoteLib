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
		$quotes = ORM::factory('Quote')->order_by('content', 'ASC')->find_all();
		$content = View::factory($this->view)
			->set('tagMultiselect', $this->createTagMultiselect())
			->set('tags', $tags)
			->set('quotes', $quotes);
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
		if (isset($post['tags']))
			foreach ($post['tags'] as $tag)
			{
				$tag = ORM::factory('Tag')->where('tagId', '=', $tag)->find();
				$quote->add('tags', $tag);
			}
		else
			$quote->add('tags', '');
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

	public function action_getQuote()
	{
		$quote = ORM::factory('Quote', $_GET['id']);
		echo View::factory('quoteForm')
			->set('quote', $quote)
			->set('tagMultiselect', $this->createTagMultiselectForQuote($quote));
	}

	public function action_editQuote()
	{
		$post = $this->request->post();
		$quote = ORM::factory('Quote', $post['id']);
		$quote->author = $post['author'];
                $quote->content = $post['content'];
                $quote->source = $post['source'];
		foreach ($quote->tags->find_all() as $t)
			$quote->remove('tags', $t);
		$quote->update();
                if (isset($post['tags']))
                        foreach ($post['tags'] as $tag)
                        {
                                $tag = ORM::factory('Tag')->where('tagId', '=', $tag)->find();
                                $quote->add('tags', $tag);
                        }
                else
                        $quote->add('tags', '');
		$quote->update();
		$this->redirect('admin');
	}

	public function action_deleteQuote()
	{
		$quote = ORM::factory('Quote')->where('quoteId', '=', $_GET['id'])->find()->delete();
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

	public function createTagMultiselectForQuote($quote)
	{
		$select = '<select multiple="multiple" name="tags[]">';
                $tags = ORM::factory('Tag')->order_by('title', 'ASC')->find_all();
                foreach ($tags as $tag)
		{
			$occurs = False;
			foreach ($quote->tags->find_all() as $t)
			{
				if ($tag->tagId == $t->tagId)
					$occurs = True;
			}
                        $select .= '<option value="'.$tag->tagId.'"'.($occurs ? 'selected="selected"' : '').'>'.$tag->title.'</option>';
		}
                $select .= '</select>';
                return $select;

	}
}
