<?php
App::uses('AppController', 'Controller');
/**
 * Friendlists Controller
 *
 * @property Friendlist $Friendlist
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FriendlistsController extends AppController {

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
		$this->Friendlist->recursive = 0;
		$this->set('friendlists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Friendlist->exists($id)) {
			throw new NotFoundException(__('Invalid friendlist'));
		}
		$options = array('conditions' => array('Friendlist.' . $this->Friendlist->primaryKey => $id));
		$this->set('friendlist', $this->Friendlist->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Friendlist->create();
			if ($this->Friendlist->save($this->request->data)) {
				$this->Session->setFlash(__('The friendlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friendlist could not be saved. Please, try again.'));
			}
		}
		$users = $this->Friendlist->User->find('list');
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
		if (!$this->Friendlist->exists($id)) {
			throw new NotFoundException(__('Invalid friendlist'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Friendlist->save($this->request->data)) {
				$this->Session->setFlash(__('The friendlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friendlist could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Friendlist.' . $this->Friendlist->primaryKey => $id));
			$this->request->data = $this->Friendlist->find('first', $options);
		}
		$users = $this->Friendlist->User->find('list');
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
		$this->Friendlist->id = $id;
		if (!$this->Friendlist->exists()) {
			throw new NotFoundException(__('Invalid friendlist'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Friendlist->delete()) {
			$this->Session->setFlash(__('The friendlist has been deleted.'));
		} else {
			$this->Session->setFlash(__('The friendlist could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Friendlist->recursive = 0;
		$this->set('friendlists', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Friendlist->exists($id)) {
			throw new NotFoundException(__('Invalid friendlist'));
		}
		$options = array('conditions' => array('Friendlist.' . $this->Friendlist->primaryKey => $id));
		$this->set('friendlist', $this->Friendlist->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Friendlist->create();
			if ($this->Friendlist->save($this->request->data)) {
				$this->Session->setFlash(__('The friendlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friendlist could not be saved. Please, try again.'));
			}
		}
		$users = $this->Friendlist->User->find('list');
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
		if (!$this->Friendlist->exists($id)) {
			throw new NotFoundException(__('Invalid friendlist'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Friendlist->save($this->request->data)) {
				$this->Session->setFlash(__('The friendlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friendlist could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Friendlist.' . $this->Friendlist->primaryKey => $id));
			$this->request->data = $this->Friendlist->find('first', $options);
		}
		$users = $this->Friendlist->User->find('list');
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
		$this->Friendlist->id = $id;
		if (!$this->Friendlist->exists()) {
			throw new NotFoundException(__('Invalid friendlist'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Friendlist->delete()) {
			$this->Session->setFlash(__('The friendlist has been deleted.'));
		} else {
			$this->Session->setFlash(__('The friendlist could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
