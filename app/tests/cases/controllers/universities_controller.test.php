<?php
/* Universities Test cases generated on: 2012-06-01 16:34:25 : 1338561265*/
App::import('Controller', 'Universities');

class TestUniversitiesController extends UniversitiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UniversitiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.university', 'app.user');

	function startTest() {
		$this->Universities =& new TestUniversitiesController();
		$this->Universities->constructClasses();
	}

	function endTest() {
		unset($this->Universities);
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
