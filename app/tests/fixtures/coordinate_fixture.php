<?php
/* Coordinate Fixture generated on: 2012-06-01 16:34:00 : 1338561240 */
class CoordinateFixture extends CakeTestFixture {
	var $name = 'Coordinate';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'longitude' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'latitude' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'longitude' => 1,
			'latitude' => 1
		),
	);
}
