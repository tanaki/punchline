<?php
/* Shirt Test cases generated on: 2011-03-27 11:54:12 : 1301226852*/
App::import('Model', 'Shirt');

class ShirtTestCase extends CakeTestCase {
	var $fixtures = array('app.shirt', 'app.category', 'app.categories_shirt', 'app.color', 'app.colors_shirt', 'app.size', 'app.shirts_size');

	function startTest() {
		$this->Shirt =& ClassRegistry::init('Shirt');
	}

	function endTest() {
		unset($this->Shirt);
		ClassRegistry::flush();
	}

}
?>