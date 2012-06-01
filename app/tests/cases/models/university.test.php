<?php
/* University Test cases generated on: 2012-06-01 16:34:17 : 1338561257*/
App::import('Model', 'University');

class UniversityTestCase extends CakeTestCase {
	var $fixtures = array('app.university', 'app.user');

	function startTest() {
		$this->University =& ClassRegistry::init('University');
	}

	function endTest() {
		unset($this->University);
		ClassRegistry::flush();
	}

}
