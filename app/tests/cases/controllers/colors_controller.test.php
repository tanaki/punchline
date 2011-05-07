<?php
/* Colors Test cases generated on: 2011-03-27 12:24:19 : 1301228659*/
App::import('Controller', 'Colors');

class TestColorsController extends ColorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ColorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.color', 'app.shirt', 'app.category', 'app.categories_shirt', 'app.colors_shirt', 'app.size', 'app.shirts_size');

	function startTest() {
		$this->Colors =& new TestColorsController();
		$this->Colors->constructClasses();
	}

	function endTest() {
		unset($this->Colors);
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