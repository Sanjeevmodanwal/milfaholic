<?php
App::uses('AppController', 'Controller');
/**
 * Uservideos Controller
 *
 * @property Uservideo $Uservideo
 * @property PaginatorComponent $Paginator
 */
class UservideosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Uservideo->recursive = 0;
		$this->set('uservideos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Uservideo->exists($id)) {
			throw new NotFoundException(__('Invalid uservideo'));
		}
		$options = array('conditions' => array('Uservideo.' . $this->Uservideo->primaryKey => $id));
		$this->set('uservideo', $this->Uservideo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Uservideo->create();
			if ($this->Uservideo->save($this->request->data)) {
				$this->Session->setFlash(__('The uservideo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uservideo could not be saved. Please, try again.'));
			}
		}
		$users = $this->Uservideo->User->find('list');
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
		if (!$this->Uservideo->exists($id)) {
			throw new NotFoundException(__('Invalid uservideo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Uservideo->save($this->request->data)) {
				$this->Session->setFlash(__('The uservideo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uservideo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Uservideo.' . $this->Uservideo->primaryKey => $id));
			$this->request->data = $this->Uservideo->find('first', $options);
		}
		$users = $this->Uservideo->User->find('list');
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
		$this->Uservideo->id = $id;
		if (!$this->Uservideo->exists()) {
			throw new NotFoundException(__('Invalid uservideo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Uservideo->delete()) {
			$this->Session->setFlash(__('The uservideo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The uservideo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Uservideo->recursive = 0;
		$this->set('uservideos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Uservideo->exists($id)) {
			throw new NotFoundException(__('Invalid uservideo'));
		}
		$options = array('conditions' => array('Uservideo.' . $this->Uservideo->primaryKey => $id));
		$this->set('uservideo', $this->Uservideo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Uservideo->create();
			if ($this->Uservideo->save($this->request->data)) {
				$this->Session->setFlash(__('The uservideo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uservideo could not be saved. Please, try again.'));
			}
		}
		$users = $this->Uservideo->User->find('list');
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
		if (!$this->Uservideo->exists($id)) {
			throw new NotFoundException(__('Invalid uservideo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Uservideo->save($this->request->data)) {
				$this->Session->setFlash(__('The uservideo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uservideo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Uservideo.' . $this->Uservideo->primaryKey => $id));
			$this->request->data = $this->Uservideo->find('first', $options);
		}
		$users = $this->Uservideo->User->find('list');
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
		$this->Uservideo->id = $id;
		if (!$this->Uservideo->exists()) {
			throw new NotFoundException(__('Invalid uservideo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Uservideo->delete()) {
			$this->Session->setFlash(__('The uservideo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The uservideo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function video($id=NULL){
            $this->set('id',$id);
            $this->loadModel('User');
            $this->User->id = $id;
            if (!$this->User->exists($id)) {
		throw new NotFoundException(__('Invalid User...'));
	    }
            if($this->request->is(array('post', 'put'))){              
            $this->Uservideo->create();
            $files=  $this->request->data['Uservideo']['video'];                 
            move_uploaded_file($files['tmp_name'], 'video/'.$files['name']);
            $this->request->data['Uservideo']['user_id']=$this->Auth->user('id');
            $this->request->data['Uservideo']['video']='video/'.$files['name']; 
            $this->request->data['Uservideo']['status']='1';
         
            if($this->Uservideo->save($this->request->data)){
                $this->Session->setFlash(__('The Membervideo has been saved.'));
                return $this->redirect(array('controller'=>'Users','action'=>'editprofile/'.$this->Auth->user('id')));
                
            }
        }
       
    }
        
}
