<?php
/* User Test cases generated on: 2012-06-01 16:34:30 : 1338561270*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.university', 'app.nationality', 'app.coordinate', 'app.language', 'app.languages_user');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
