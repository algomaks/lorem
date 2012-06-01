<?php
/* Nationality Test cases generated on: 2012-06-01 16:34:12 : 1338561252*/
App::import('Model', 'Nationality');

class NationalityTestCase extends CakeTestCase {
	var $fixtures = array('app.nationality', 'app.user');

	function startTest() {
		$this->Nationality =& ClassRegistry::init('Nationality');
	}

	function endTest() {
		unset($this->Nationality);
		ClassRegistry::flush();
	}

}
