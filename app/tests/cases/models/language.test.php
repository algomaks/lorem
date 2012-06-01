<?php
/* Language Test cases generated on: 2012-06-01 16:34:05 : 1338561245*/
App::import('Model', 'Language');

class LanguageTestCase extends CakeTestCase {
	var $fixtures = array('app.language', 'app.user', 'app.languages_user');

	function startTest() {
		$this->Language =& ClassRegistry::init('Language');
	}

	function endTest() {
		unset($this->Language);
		ClassRegistry::flush();
	}

}
