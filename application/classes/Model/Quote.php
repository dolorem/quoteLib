<?php

class Model_Quote extends ORM
{
	protected $_primary_key = "quoteId";
	protected $_has_many = array(
		'tags' => array(
			'model' => 'Tag',
//			'far_key' => 'quoteId',
			'through' => 'quote_tags',
//			'foreign_key' => 'tagId'
			'far_key' => 'tagId',
			'foreign_key' => 'quoteId'
		),
	);
}
