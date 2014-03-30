<?php

class Model_Quote extends ORM
{
	protected $_primary_key = 'quoteId';

	protected $_has_many = array(
		'tags' => array(
			'model' => 'Tag',
			'through' => 'quote_tags',
			'far_key' => 'tagId',
			'foreign_key' => 'quoteId'
		),
	);
}
