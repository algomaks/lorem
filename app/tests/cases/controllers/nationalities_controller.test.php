<?php
/* Nationalities Test cases generated on: 2012-06-01 16:34:12 : 1338561252*/
App::import('Controller', 'Nationalities');

class TestNationalitiesController extends NationalitiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NationalitiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.nationality', 'app.user');

	function startTest() {
		$this->Nationalities =& new TestNationalitiesController();
		$this->Nationalities->constructClasses();
	}

	function endTest() {
		unset($this->Nationalities);
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
