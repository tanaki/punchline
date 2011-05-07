<?php
class ColorsController extends AppController {

	var $name = 'Colors';

	function admin_index() {
		$this->layout = "admin";
		$this->Color->recursive = 0;
		$this->set('colors', $this->paginate());
	}

	function admin_view($id = null) {
		$this->layout = "admin";
		if (!$id) {
			$this->Session->setFlash(__('Invalid color', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('color', $this->Color->read(null, $id));
	}

	function admin_add() {
		$this->layout = "admin";
		if (!empty($this->data)) {
			$this->Color->create();
			if ($this->Color->save($this->data)) {
				$this->Session->setFlash(__('The color has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The color could not be saved. Please, try again.', true));
			}
		}
		$shirts = $this->Color->Shirt->find('list');
		$this->set(compact('shirts'));
	}

	function admin_edit($id = null) {
		$this->layout = "admin";
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid color', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Color->save($this->data)) {
				$this->Session->setFlash(__('The color has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The color could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Color->read(null, $id);
		}
		$shirts = $this->Color->Shirt->find('list');
		$this->set(compact('shirts'));
	}

	function admin_delete($id = null) {
		$this->layout = "admin";
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for color', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Color->delete($id)) {
			$this->Session->setFlash(__('Color deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Color was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>