<?php
/* Category Test cases generated on: 2011-03-27 12:17:24 : 1301228244*/
App::import('Model', 'Category');

class CategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.category', 'app.shirt', 'app.categories_shirt', 'app.color', 'app.colors_shirt', 'app.size', 'app.shirts_size');

	function startTest() {
		$this->Category =& ClassRegistry::init('Category');
	}

	function endTest() {
		unset($this->Category);
		ClassRegistry::flush();
	}

}
?>