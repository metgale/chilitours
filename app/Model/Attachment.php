<?php

class Attachment extends AppModel {

	public $actsAs = array(
		'Upload.Upload' => array(
			'attachment' => array(
				'thumbnailSizes' => array(
					'thumb' => '80x80'
				)
			)
		)
	);
	public $belongsTo = array(
		'Travel' => array(
			'className' => 'Travel',
			'foreignKey' => 'foreign_key'
		)
	);

}