<?php
App::uses('AppController', 'Controller');
/**
 * Programs Controller
 *
 */
class ProgramsController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index','view');
	}

	public function index() {
		$this->set('programs', $this->Program->find('all'));
	}

	public function view($id = null) {
		$this->Program->id = $id;
		if (!$this->Program->exists()) {
			throw new NotFoundException(__('Invalid Program'));
        }
		$this->set('programs', $this->Program->find('all'));
		$this->set('program', $this->Program->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Program->create();
			if ($this->Program->save($this->request->data)) {
				$this->Session->setFlash(__('The program has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The program could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		$this->Program->id = $id;
		if (!$this->Program->exists()) {
			throw new NotFoundException(__('Invalid program'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Program->save($this->request->data)) {
				$this->Session->setFlash(__('The program has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The program could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Program->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Program->id = $id;
		if (!$this->Program->exists()) {
			throw new NotFoundException(__('Invalid program'));
		}
		if ($this->Program->delete()) {
			$this->Session->setFlash(__('Program member deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The program was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 */
	public function admin_index() {
		$this->Program->recursive = 0;
		$this->set('programs', $this->paginate());
	}

/**
 * admin_view method
 */
	public function admin_view($id = null) {
		$this->Program->id = $id;
		if (!$this->Program->exists()) {
			throw new NotFoundException(__('Invalid Program Member'));
		}
		$this->set('program', $this->Program->read(null, $id));
	}

/**
 * admin_add method
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Program->create();
			if ($this->Program->save($this->request->data)) {
				$this->Session->setFlash(__('The program has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The program could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 */
	public function admin_edit($id = null) {
		$this->Program->id = $id;
		if (!$this->Program->exists()) {
			throw new NotFoundException(__('Invalid Program'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Program->save($this->request->data)) {
				$this->Session->setFlash(__('The program has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The program could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Program->read(null, $id);
		}
	}

/**
 * admin_delete method
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Program->id = $id;
		if (!$this->Program->exists()) {
			throw new NotFoundException(__('Invalid program'));
		}
		if ($this->Program->delete()) {
			$this->Session->setFlash(__('Program deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Program was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
