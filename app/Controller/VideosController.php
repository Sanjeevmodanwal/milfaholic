<?php
App::uses('AppController', 'Controller');
/**
 * Videos Controller
 *
 * @property Video $Video
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VideosController extends AppController {

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
		$this->Video->recursive = 0;
		$this->set('videos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
		$this->set('video', $this->Video->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Video->create();
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('The video has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Video->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('The video has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
			$this->request->data = $this->Video->find('first', $options);
		}
		$categories = $this->Video->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Video->id = $id;
		if (!$this->Video->exists()) {
			throw new NotFoundException(__('Invalid video'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Video->delete()) {
			$this->Session->setFlash(__('The video has been deleted.'));
		} else {
			$this->Session->setFlash(__('The video could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Video->recursive = 0;
		$this->set('videos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
		$this->set('video', $this->Video->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Video->create();
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('The video has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Video->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('The video has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
			$this->request->data = $this->Video->find('first', $options);
		}
		$categories = $this->Video->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Video->id = $id;
		if (!$this->Video->exists()) {
			throw new NotFoundException(__('Invalid video'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Video->delete()) {
			$this->Session->setFlash(__('The video has been deleted.'));
		} else {
			$this->Session->setFlash(__('The video could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
