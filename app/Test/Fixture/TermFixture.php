<?php
/**
 * TermFixture
 *
 */
class TermFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'travel_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'startdate' => array('type' => 'date', 'null' => false, 'default' => null),
		'enddate' => array('type' => 'date', 'null' => false, 'default' => null),
		'price' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'town' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'travel_id' => 1,
			'startdate' => '2013-12-03',
			'enddate' => '2013-12-03',
			'price' => 'Lorem ipsum dolor sit amet',
			'town' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-12-03 20:01:50',
			'modified' => '2013-12-03 20:01:50'
		),
	);

}
