<?php
/* Color Test cases generated on: 2011-03-27 12:17:33 : 1301228253*/
App::import('Model', 'Color');

class ColorTestCase extends CakeTestCase {
	var $fixtures = array('app.color', 'app.shirt', 'app.category', 'app.categories_shirt', 'app.colors_shirt', 'app.size', 'app.shirts_size');

	function startTest() {
		$this->Color =& ClassRegistry::init('Color');
	}

	function endTest() {
		unset($this->Color);
		ClassRegistry::flush();
	}

}
?>