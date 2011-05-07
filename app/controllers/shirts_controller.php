<?php
class ShirtsController extends AppController {

	var $name = 'Shirts';

	function index ($p = null) {
		if( !isset($p) || $p != "home" ) {
			$this->layout = "body";
		}
		$this->set('shirts', Set::map($this->Shirt->find('all')));
	}

	function admin_index() {
		$this->layout = "admin";
		$this->Shirt->recursive = 0;
		$this->set('shirts', $this->paginate());
	}

	function admin_view($id = null) {
		$this->layout = "admin";
		if (!$id) {
			$this->Session->setFlash(__('Invalid shirt', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('shirt', $this->Shirt->read(null, $id));
	}

	function admin_add() {
		$this->layout = "admin";
		if (!empty($this->data)) {
			$this->Shirt->create();
			if ($this->Shirt->save($this->data)) {
				$this->Session->setFlash(__('The shirt has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shirt could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->Shirt->Category->find('list');
		$colors = $this->Shirt->Color->find('list');
		$sizes = $this->Shirt->Size->find('list');
		$this->set(compact('categories', 'colors', 'sizes'));
	}

	function admin_edit($id = null) {
		$this->layout = "admin";
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid shirt', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Shirt->save($this->data)) {
				$this->Session->setFlash(__('The shirt has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shirt could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Shirt->read(null, $id);
		}
		$categories = $this->Shirt->Category->find('list');
		$colors = $this->Shirt->Color->find('list');
		$sizes = $this->Shirt->Size->find('list');
		$this->set(compact('categories', 'colors', 'sizes'));
	}

	function admin_delete($id = null) {
		$this->layout = "admin";
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for shirt', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Shirt->delete($id)) {
			$this->Session->setFlash(__('Shirt deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Shirt was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>