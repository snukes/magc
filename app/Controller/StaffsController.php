<?php
App::uses('AppController', 'Controller');
/**
 * Staff Controller
 *
 */
class StaffsController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'view');
	}

	public function index() {
		$this->set('staff', $this->Staff->find('all'));
	}

	public function view($id = null) {
		$this->Staff->id = $id;
		if (!$this->Staff->exists()) {
			throw new NotFoundException(__('Invalid Staff Member'));
		}
		$this->set('staffs', $this->Staff->find('all'));
		$this->set('staff', $this->Staff->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Staff->create();
			if ($this->Staff->save($this->request->data)) {
				$this->Session->setFlash(__('The staff member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff member could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		$this->Staff->id = $id;
		if (!$this->Staff->exists()) {
			throw new NotFoundException(__('Invalid staff member'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Staff->save($this->request->data)) {
				$this->Session->setFlash(__('The staff member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff member could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Staff->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Staff->id = $id;
		if (!$this->Staff->exists()) {
			throw new NotFoundException(__('Invalid staff member'));
		}
		if ($this->Staff->delete()) {
			$this->Session->setFlash(__('Staff member deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The staff member was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 */
	public function admin_index() {
		$this->Staff->recursive = 0;
		$this->set('staff', $this->paginate());
	}

/**
 * admin_view method
 */
	public function admin_view($id = null) {
		$this->Staff->id = $id;
		if (!$this->Staff->exists()) {
			throw new NotFoundException(__('Invalid Staff Member'));
		}
		$this->set('staff', $this->Staff->read(null, $id));
	}

/**
 * admin_add method
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Staff->create();
			if ($this->Staff->save($this->request->data)) {
				$this->Session->setFlash(__('The staff member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff member could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 */
	public function admin_edit($id = null) {
		$this->Staff->id = $id;
		if (!$this->Staff->exists()) {
			throw new NotFoundException(__('Invalid staff'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Staff->save($this->request->data)) {
				$this->Session->setFlash(__('The staff member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff member could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Staff->read(null, $id);
		}
	}

/**
 * admin_delete method
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Staff->id = $id;
		if (!$this->Staff->exists()) {
			throw new NotFoundException(__('Invalid staff member'));
		}
		if ($this->Staff->delete()) {
			$this->Session->setFlash(__('Staff deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Staff was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
