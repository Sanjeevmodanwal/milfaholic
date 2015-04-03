<?php

App::uses('AppController', 'Controller');

/**
 * Useralbumimages Controller
 *
 * @property Useralbumimage $Useralbumimage
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UseralbumimagesController extends AppController {

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
        $this->Useralbumimage->recursive = 0;
        $this->set('useralbumimages', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Useralbumimage->exists($id)) {
            throw new NotFoundException(__('Invalid useralbumimage'));
        }
        $options = array('conditions' => array('Useralbumimage.' . $this->Useralbumimage->primaryKey => $id));
        $this->set('useralbumimage', $this->Useralbumimage->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Useralbumimage->create();
            if ($this->Useralbumimage->save($this->request->data)) {
                $this->Session->setFlash(__('The useralbumimage has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The useralbumimage could not be saved. Please, try again.'));
            }
        }
        $useralbums = $this->Useralbumimage->Useralbum->find('list');
        $this->set(compact('useralbums'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Useralbumimage->exists($id)) {
            throw new NotFoundException(__('Invalid useralbumimage'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Useralbumimage->save($this->request->data)) {
                $this->Session->setFlash(__('The useralbumimage has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The useralbumimage could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Useralbumimage.' . $this->Useralbumimage->primaryKey => $id));
            $this->request->data = $this->Useralbumimage->find('first', $options);
        }
        $useralbums = $this->Useralbumimage->Useralbum->find('list');
        $this->set(compact('useralbums'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Useralbumimage->id = $id;
        if (!$this->Useralbumimage->exists()) {
            throw new NotFoundException(__('Invalid useralbumimage'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Useralbumimage->delete()) {
            $this->Session->setFlash(__('The useralbumimage has been deleted.'));
        } else {
            $this->Session->setFlash(__('The useralbumimage could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Useralbumimage->recursive = 0;
        $this->set('useralbumimages', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Useralbumimage->exists($id)) {
            throw new NotFoundException(__('Invalid useralbumimage'));
        }
        $options = array('conditions' => array('Useralbumimage.' . $this->Useralbumimage->primaryKey => $id));
        $this->set('useralbumimage', $this->Useralbumimage->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Useralbumimage->create();
            if ($this->Useralbumimage->save($this->request->data)) {
                $this->Session->setFlash(__('The useralbumimage has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The useralbumimage could not be saved. Please, try again.'));
            }
        }
        $useralbums = $this->Useralbumimage->Useralbum->find('list');
        $this->set(compact('useralbums'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Useralbumimage->exists($id)) {
            throw new NotFoundException(__('Invalid useralbumimage'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Useralbumimage->save($this->request->data)) {
                $this->Session->setFlash(__('The useralbumimage has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The useralbumimage could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Useralbumimage.' . $this->Useralbumimage->primaryKey => $id));
            $this->request->data = $this->Useralbumimage->find('first', $options);
        }
        $useralbums = $this->Useralbumimage->Useralbum->find('list');
        $this->set(compact('useralbums'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Useralbumimage->id = $id;
        if (!$this->Useralbumimage->exists()) {
            throw new NotFoundException(__('Invalid useralbumimage'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Useralbumimage->delete()) {
            $this->Session->setFlash(__('The useralbumimage has been deleted.'));
        } else {
            $this->Session->setFlash(__('The useralbumimage could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function private_photo($id = NULL) {
        $this->loadModel('User');
        $this->User->id = $id;
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid User...'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Useralbumimage']['user_id'] = $this->Auth->User('id');
            $this->request->data['Useralbumimage']['status'] = 1;
            $files = $this->request->data['Useralbumimage']['file'];
            $ram = array();
            foreach ($files as $f) {

                move_uploaded_file($f['tmp_name'], 'files/useralbum/' . $f['name']);
                $ram[] = $this->request->data['Useralbumimage']['file'] = $f['name'];
//                debug($f['name']);exit;
            }
            $this->request->data['Useralbumimage']['file'] = serialize($ram);
            if ($this->Useralbumimage->save($this->request->data)) {
                $this->Session->setFlash(__('The Member Private Photo Albums has been saved.'));
                return $this->redirect(array('controller' => 'Users', 'action' => 'editprofile/', $id));
            } else {
                $this->Session->setFlash(__('The Member Private Photo Albums could not be saved. Please, try again.'));
                return $this->redirect(array('controller' => 'Users', 'action' => 'private_photo/', $id));
            }
        } else {
            $options = array('conditions' => array('Useralbumimage.' . $this->Useralbumimage->primaryKey => $id));
            $this->request->data = $this->Useralbumimage->find('first', $options);
        }
    }

    public function upload_photo($id = NULL) {
        if ($this->request->is('post')) {
            $this->request->data['Useralbumimage']['user_id'] = $this->Auth->User('id');
            $files = $this->request->data['Useralbumimage']['file'];
            // pr($this->data);
            $ram = array();
            foreach ($files as $f) {
                move_uploaded_file($f['tmp_name'], 'files/useralbum/' . $f['name']);
                $ram[] = $this->request->data['Useralbumimage']['file'] = $f['name'];
            }
            $this->request->data['Useralbumimage']['file'] = serialize($ram);

            $this->Useralbumimage->create();
            if ($this->Useralbumimage->save($this->request->data)) {
                $this->Session->setFlash(__('The Member Private Photo Albums has been saved.'));
                return $this->redirect(array('controller' => 'Users', 'action' => 'editprofile/', $id));
            } else {
                $this->Session->setFlash(__('The Member Private Photo Albums could not be saved. Please, try again.'));
                return $this->redirect(array('controller' => 'Users', 'action' => 'private_photo/', $id));
            }
        }
    }

}
