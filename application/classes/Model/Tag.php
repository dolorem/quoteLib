<?php

class Model_Tag extends ORM
{
	protected $_primary_key = 'tagId';

	protected $_has_many = array(
		'quotes' => array(
			'model' => 'Quote',
			'through' => 'quote_tags',
//			'far_key' => 'tagId',
//			'foreign_key' => 'quoteId'
			'far_key' => 'quoteId',
			'foreign_key' => 'tagId'
		),
	);
}
