<?php
App::uses('AppController', 'Controller');
/**
 * Useralbums Controller
 *
 * @property Useralbum $Useralbum
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UseralbumsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Useralbum->recursive = 0;
		$this->set('useralbums', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Useralbum->exists($id)) {
			throw new NotFoundException(__('Invalid useralbum'));
		}
		$options = array('conditions' => array('Useralbum.' . $this->Useralbum->primaryKey => $id));
		$this->set('useralbum', $this->Useralbum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Useralbum->create();
			if ($this->Useralbum->save($this->request->data)) {
				$this->Session->setFlash(__('The useralbum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The useralbum could not be saved. Please, try again.'));
			}
		}
		$users = $this->Useralbum->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Useralbum->exists($id)) {
			throw new NotFoundException(__('Invalid useralbum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Useralbum->save($this->request->data)) {
				$this->Session->setFlash(__('The useralbum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The useralbum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Useralbum.' . $this->Useralbum->primaryKey => $id));
			$this->request->data = $this->Useralbum->find('first', $options);
		}
		$users = $this->Useralbum->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Useralbum->id = $id;
		if (!$this->Useralbum->exists()) {
			throw new NotFoundException(__('Invalid useralbum'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Useralbum->delete()) {
			$this->Session->setFlash(__('The useralbum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The useralbum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Useralbum->recursive = 0;
		$this->set('useralbums', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Useralbum->exists($id)) {
			throw new NotFoundException(__('Invalid useralbum'));
		}
		$options = array('conditions' => array('Useralbum.' . $this->Useralbum->primaryKey => $id));
		$this->set('useralbum', $this->Useralbum->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Useralbum->create();
			if ($this->Useralbum->save($this->request->data)) {
				$this->Session->setFlash(__('The useralbum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The useralbum could not be saved. Please, try again.'));
			}
		}
		$users = $this->Useralbum->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Useralbum->exists($id)) {
			throw new NotFoundException(__('Invalid useralbum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Useralbum->save($this->request->data)) {
				$this->Session->setFlash(__('The useralbum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The useralbum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Useralbum.' . $this->Useralbum->primaryKey => $id));
			$this->request->data = $this->Useralbum->find('first', $options);
		}
		$users = $this->Useralbum->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Useralbum->id = $id;
		if (!$this->Useralbum->exists()) {
			throw new NotFoundException(__('Invalid useralbum'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Useralbum->delete()) {
			$this->Session->setFlash(__('The useralbum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The useralbum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
