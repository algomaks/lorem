<?php
/* LanguagesUsers Test cases generated on: 2012-06-01 16:34:09 : 1338561249*/
App::import('Controller', 'LanguagesUsers');

class TestLanguagesUsersController extends LanguagesUsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LanguagesUsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.languages_user', 'app.user', 'app.language');

	function startTest() {
		$this->LanguagesUsers =& new TestLanguagesUsersController();
		$this->LanguagesUsers->constructClasses();
	}

	function endTest() {
		unset($this->LanguagesUsers);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
