<?php
/* Coordinates Test cases generated on: 2012-06-01 16:34:01 : 1338561241*/
App::import('Controller', 'Coordinates');

class TestCoordinatesController extends CoordinatesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CoordinatesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.coordinate', 'app.user');

	function startTest() {
		$this->Coordinates =& new TestCoordinatesController();
		$this->Coordinates->constructClasses();
	}

	function endTest() {
		unset($this->Coordinates);
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
