<?php
/* Coordinate Test cases generated on: 2012-06-01 16:34:00 : 1338561240*/
App::import('Model', 'Coordinate');

class CoordinateTestCase extends CakeTestCase {
	var $fixtures = array('app.coordinate', 'app.user');

	function startTest() {
		$this->Coordinate =& ClassRegistry::init('Coordinate');
	}

	function endTest() {
		unset($this->Coordinate);
		ClassRegistry::flush();
	}

}
