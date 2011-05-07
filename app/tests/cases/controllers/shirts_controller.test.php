<?php
/* Shirts Test cases generated on: 2011-03-27 12:23:26 : 1301228606*/
App::import('Controller', 'Shirts');

class TestShirtsController extends ShirtsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ShirtsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.shirt', 'app.category', 'app.categories_shirt', 'app.color', 'app.colors_shirt', 'app.size', 'app.shirts_size');

	function startTest() {
		$this->Shirts =& new TestShirtsController();
		$this->Shirts->constructClasses();
	}

	function endTest() {
		unset($this->Shirts);
		ClassRegistry::flush();
	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>