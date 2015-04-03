<?php
App::uses('AppController', 'Controller');
/**
 * Favorites Controller
 *
 * @property Favorite $Favorite
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FavoritesController extends AppController {

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
		$this->Favorite->recursive = 0;
		$this->set('favorites', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Favorite->exists($id)) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		$options = array('conditions' => array('Favorite.' . $this->Favorite->primaryKey => $id));
		$this->set('favorite', $this->Favorite->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Favorite->create();
			if ($this->Favorite->save($this->request->data)) {
				$this->Session->setFlash(__('The favorite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorite could not be saved. Please, try again.'));
			}
		}
		$users = $this->Favorite->User->find('list');
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
		if (!$this->Favorite->exists($id)) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Favorite->save($this->request->data)) {
				$this->Session->setFlash(__('The favorite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Favorite.' . $this->Favorite->primaryKey => $id));
			$this->request->data = $this->Favorite->find('first', $options);
		}
		$users = $this->Favorite->User->find('list');
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
		$this->Favorite->id = $id;
		if (!$this->Favorite->exists()) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Favorite->delete()) {
			$this->Session->setFlash(__('The favorite has been deleted.'));
		} else {
			$this->Session->setFlash(__('The favorite could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Favorite->recursive = 0;
		$this->set('favorites', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Favorite->exists($id)) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		$options = array('conditions' => array('Favorite.' . $this->Favorite->primaryKey => $id));
		$this->set('favorite', $this->Favorite->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Favorite->create();
			if ($this->Favorite->save($this->request->data)) {
				$this->Session->setFlash(__('The favorite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorite could not be saved. Please, try again.'));
			}
		}
		$users = $this->Favorite->User->find('list');
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
		if (!$this->Favorite->exists($id)) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Favorite->save($this->request->data)) {
				$this->Session->setFlash(__('The favorite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Favorite.' . $this->Favorite->primaryKey => $id));
			$this->request->data = $this->Favorite->find('first', $options);
		}
		$users = $this->Favorite->User->find('list');
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
		$this->Favorite->id = $id;
		if (!$this->Favorite->exists()) {
			throw new NotFoundException(__('Invalid favorite'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Favorite->delete()) {
			$this->Session->setFlash(__('The favorite has been deleted.'));
		} else {
			$this->Session->setFlash(__('The favorite could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
