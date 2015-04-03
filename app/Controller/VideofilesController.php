<?php
App::uses('AppController', 'Controller');
/**
 * Videofiles Controller
 *
 * @property Videofile $Videofile
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VideofilesController extends AppController {

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
		$this->Videofile->recursive = 0;
		$this->set('videofiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Videofile->exists($id)) {
			throw new NotFoundException(__('Invalid videofile'));
		}
		$options = array('conditions' => array('Videofile.' . $this->Videofile->primaryKey => $id));
		$this->set('videofile', $this->Videofile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Videofile->create();
			if ($this->Videofile->save($this->request->data)) {
				$this->Session->setFlash(__('The videofile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videofile could not be saved. Please, try again.'));
			}
		}
		$videos = $this->Videofile->Video->find('list');
		$this->set(compact('videos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Videofile->exists($id)) {
			throw new NotFoundException(__('Invalid videofile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Videofile->save($this->request->data)) {
				$this->Session->setFlash(__('The videofile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videofile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Videofile.' . $this->Videofile->primaryKey => $id));
			$this->request->data = $this->Videofile->find('first', $options);
		}
		$videos = $this->Videofile->Video->find('list');
		$this->set(compact('videos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Videofile->id = $id;
		if (!$this->Videofile->exists()) {
			throw new NotFoundException(__('Invalid videofile'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Videofile->delete()) {
			$this->Session->setFlash(__('The videofile has been deleted.'));
		} else {
			$this->Session->setFlash(__('The videofile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Videofile->recursive = 0;
		$this->set('videofiles', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Videofile->exists($id)) {
			throw new NotFoundException(__('Invalid videofile'));
		}
		$options = array('conditions' => array('Videofile.' . $this->Videofile->primaryKey => $id));
		$this->set('videofile', $this->Videofile->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Videofile->create();
			if ($this->Videofile->save($this->request->data)) {
				$this->Session->setFlash(__('The videofile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videofile could not be saved. Please, try again.'));
			}
		}
		$videos = $this->Videofile->Video->find('list');
		$this->set(compact('videos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Videofile->exists($id)) {
			throw new NotFoundException(__('Invalid videofile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Videofile->save($this->request->data)) {
				$this->Session->setFlash(__('The videofile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videofile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Videofile.' . $this->Videofile->primaryKey => $id));
			$this->request->data = $this->Videofile->find('first', $options);
		}
		$videos = $this->Videofile->Video->find('list');
		$this->set(compact('videos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Videofile->id = $id;
		if (!$this->Videofile->exists()) {
			throw new NotFoundException(__('Invalid videofile'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Videofile->delete()) {
			$this->Session->setFlash(__('The videofile has been deleted.'));
		} else {
			$this->Session->setFlash(__('The videofile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
