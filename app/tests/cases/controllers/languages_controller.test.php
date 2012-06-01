<?php
/* Languages Test cases generated on: 2012-06-01 16:34:06 : 1338561246*/
App::import('Controller', 'Languages');

class TestLanguagesController extends LanguagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LanguagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.language', 'app.user', 'app.languages_user');

	function startTest() {
		$this->Languages =& new TestLanguagesController();
		$this->Languages->constructClasses();
	}

	function endTest() {
		unset($this->Languages);
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
