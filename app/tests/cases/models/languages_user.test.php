<?php
/* LanguagesUser Test cases generated on: 2012-06-01 16:34:08 : 1338561248*/
App::import('Model', 'LanguagesUser');

class LanguagesUserTestCase extends CakeTestCase {
	var $fixtures = array('app.languages_user', 'app.user', 'app.language');

	function startTest() {
		$this->LanguagesUser =& ClassRegistry::init('LanguagesUser');
	}

	function endTest() {
		unset($this->LanguagesUser);
		ClassRegistry::flush();
	}

}
