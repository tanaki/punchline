<?php
/* Size Test cases generated on: 2011-03-27 12:17:29 : 1301228249*/
App::import('Model', 'Size');

class SizeTestCase extends CakeTestCase {
	var $fixtures = array('app.size', 'app.shirt', 'app.category', 'app.categories_shirt', 'app.color', 'app.colors_shirt', 'app.shirts_size');

	function startTest() {
		$this->Size =& ClassRegistry::init('Size');
	}

	function endTest() {
		unset($this->Size);
		ClassRegistry::flush();
	}

}
?>