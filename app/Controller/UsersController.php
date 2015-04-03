<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('admin_add', 'admin_login', 'login', 'register','test','myprofile'));
    }

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
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $plans = $this->User->Plan->find('list');
        $this->set(compact('plans'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $plans = $this->User->Plan->find('list');
        $this->set(compact('plans'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->User->recursive = 0;
        if ($this->request->is("post")) {
            if ($this->request->data["keyword"]) {
                $keyword = trim($this->request->data["keyword"]);
                $this->paginate = array("limit" => 3, "conditions" => array("OR" => array(
                            "User.name LIKE" => "%" . $keyword . "%",
                            "User.username LIKE" => "%" . $keyword . "%",
                            "User.email LIKE" => "%" . $keyword . "%",
                            "User.gender LIKE" => "%" . $keyword . "%",
                            "User.image LIKE" => "%" . $keyword . "%"
                )));
                $this->set("keyword", $keyword);
            }
        }
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {        
        if ($this->request->is('post')) {
            if ($this->User->hasAny(array('User.username' => $this->request->data['User']['username']))) {
                $this->Session->setFlash(__('Username already exist!!!'));
                return $this->redirect(array('action' => 'admin_add'));
            } else {
                if ($this->User->hasAny(array('User.email' => $this->request->data['User']['email']))) {
                    $this->Session->setFlash(__('Email already exist!!!'));
                    return $this->redirect(array('action' => 'admin_add'));
                } else {
                    $files = $this->request->data['User']['image'];
                    $ram = array();
                    foreach ($files as $f) {
                        move_uploaded_file($f['tmp_name'], 'files/user/' . $f['name']);
                        $ram[] = $this->request->data['User']['image'] = $f['name'];
                    }
                    $this->request->data['User']['image'] = serialize($ram);

                    $this->User->create();
                    if ($this->User->save($this->request->data)) {
                        $this->Session->setFlash(__('The User has been saved.'));
                        return $this->redirect(array('controller' => 'Users', 'action' => 'admin_index'));
                    } else {
                        $this->Session->setFlash(__('The User could not be saved. Please, try again.'));
                        return $this->redirect(array('controller' => 'Users', 'action' => 'admin_add'));
                    }
                }
            }
        }
        $plans = $this->User->Plan->find('list');
        $this->set(compact('plans'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
         $this->User->id = $id;
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid User'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $files = $this->request->data['User']['image'];
            $ram = array();
            foreach ($files as $f) {

                move_uploaded_file($f['tmp_name'], 'files/user/' . $f['name']);
                $ram[] = $this->request->data['User']['image'] = $f['name'];
//                debug($f['name']);exit;
            }
            $this->request->data['User']['image'] = serialize($ram);
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The User has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The User could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $b = $this->User->find('first', array('conditions' => array('User.id' => $id)));
        $this->set('users', $b);
        
        $plans = $this->User->Plan->find('list');
        $this->set(compact('plans'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function admin_profiles() {
        $this->layout = "admin";
        $profile = $this->User->find('first', array('conditions' => array(
                'User.id' => $this->Auth->user('id')
            ))
        );
        $this->set('admin_profiles', $profile);
    }

    public function admin_profilesedit($id = NULL) {
        $this->layout = "admin";
        $this->User->id = $id;
        $x = $this->User->find('first', array('conditions' => array('User.id' => $id)));
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The Admin Profile has been saved'));
                $this->redirect(array('action' => 'admin_profiles'));
            } else {
                $this->Session->setFlash(__('The Admin Profile could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
            $this->set("user_edit", $this->request->data);
        }
    }

    public function admin_changepassword() {
        $this->layout = "admin";
        if ($this->request->is('post')) {
            $password = AuthComponent::password($this->data['User']['old_password']);
            $em = $this->Auth->user('username');
            $pass = $this->User->find('first', array('conditions' => array('AND' => array('User.password' => $password, 'User.username' => $em))));
            if ($pass) {
                if ($this->data['User']['new_password'] != $this->data['User']['cpassword']) {
                    $this->Session->setFlash(__("New password and Confirm password field do not match"));
                } else {
                    $this->User->data['User']['password'] = $this->data['User']['new_password'];
                    $this->User->id = $pass['User']['id'];
                    if ($this->User->exists()) {
                        $pass['User']['password'] = $this->data['User']['new_password'];
                        if ($this->User->save()) {
                            $this->Session->setFlash(__("Password Updated"));
                            $this->redirect(array('controller' => 'Users', 'action' => 'admin_profiles'));
                        }
                    }
                }
            } else {
                $this->Session->setFlash(__("Your old password did not match."));
            }
        }
    }

    public function admin_login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect("/admin/users");
                $this->Session->setFlash(__('Successfully LoggedIn!!!'));
            } else {
                $this->Session->setFlash(__('Invalid Username or Password, Please Try Again!!!'));
                $this->redirect("/admin/users/login");
            }
        }
    }

    public function admin_logout() {
        if ($this->Auth->logout()) {
            $this->redirect("/admin/users/login");
        }
    }

    public function admin_activate($id = null) {
        $this->User->id = $id;
        if ($this->User->exists()) {
            $x = $this->User->save(array(
                'User' => array(
                    'status' => '1'
                )
            ));
            $this->Session->setFlash(__("Activated successfully."));
            $this->redirect($this->referer());
        } else {
            $this->Session->setFlash(__("Unable to activate."));
            $this->redirect($this->referer());
        }
    }

    public function admin_deactivate($id = null) {
        $this->User->id = $id;
        if ($this->User->exists()) {
            $x = $this->User->save(array(
                'User' => array(
                    'status' => '0'
                )
            ));
            $this->Session->setFlash(__("Activated successfully."));
            $this->redirect($this->referer());
        } else {
            $this->Session->setFlash(__("Unable to activate."));
            $this->redirect($this->referer());
        }
    }

    public function admin_activateall($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        foreach ($this->request['data']['User'] as $k => $v) {
            if ($k == $v) {
                $this->User->id = $v;
                if ($this->User->exists()) {
                    $x = $this->User->save(array(
                        'User' => array(
                            'status' => 1
                        )
                    ));

                    $this->Session->setFlash(__('Selected Users Activated.', true));
                } else {
                    $this->Session->setFlash(__("Unable to Activate Users."));
                }
            }
        }
        $this->redirect($this->referer());
    }

    public function admin_inactivateall($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        foreach ($this->request['data']['User'] as $k => $v) {
            if ($k == $v) {
                $this->User->id = $v;
                if ($this->User->exists()) {
                    $x = $this->User->save(array(
                        'User' => array(
                            'status' => 0
                        )
                    ));
                    $this->Session->setFlash(__('Selected Users Deactivated.', true));
                } else {
                    $this->Session->setFlash(__("Unable to Deactivate Users."));
                }
            }
        }
        $this->redirect($this->referer());
    }

    public function login() {
        if ($this->request->is('post')) {
            if (isset($this->data['User']['username'])) {
                $this->request->data['User']['usrename'] = $this->data['User']['username'];
                $this->Auth->authenticate['Form'] = array(
                    'fields' => array(
                        'userModel' => 'User',
                        'username' => 'username'
                ));
            } else {
                $this->Auth->authenticate['Form'] = array(
                    'userModel' => 'User',
                    'fields' => array('username' => 'username')
                );
            }
            if (!$this->Auth->login()) {
                $this->Session->setFlash("Invalid Username or password!!");
                $this->redirect(array('controller' => 'Users', 'action' => 'login'));
            } else {
                $this->Session->setFlash("Successfully logged in...");
                $this->redirect('/Users/profile');
            }
        }
        
        $user = $this->User->find('all'
                ,array(
                    'conditions'=>array('User.status'=>1,'User.role'=>'Admin'),
                    'recursive'=>2,
                    'contain'=>array(
                      'User'=>array(
                          'id','image',
                          'Plan'=>array(),
                          'Favorite'=>array(),
                          'Friendlist'=>array(),
                          'Message'=>array(),
                      )
                    ),                    
                    'limit'=>12,'order' => 'RAND()',
                    'fields'=>array('id','image')
                    ));
        $this->set('alluser', $user); 
        
        
    }

    public function logout() {
        if ($this->Auth->logout()) {
            $this->redirect("/users/login");
        }
    }

//    public function register() {
//        if ($this->request->is('post')) {
//            //debug($this->request->data);exit;
//            if ($this->User->hasAny(array('User.username' => $this->request->data['User']['username']))) {
//                $this->Session->setFlash(__('Username already exist!!!'));
//                return $this->redirect('/pages/index');
//            } else {
//                if ($this->User->hasAny(array('User.email' => $this->request->data['User']['email']))) {
//                    $this->Session->setFlash(__('that email already has an active account, would you like to go to the login page?'));
//                    return $this->redirect('/pages/index');
//                } else {
//                    $this->User->create();
//                    if ($this->User->save($this->request->data)) {
//                        $this->Session->setFlash(__('The user has been saved.'));
//                        return $this->redirect('/users/profile');
//                    } else {
//                        $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
//                    }
//                }
//            }
//        }
//    }
    
    public function register(){
        if($this->request->is('post')){
            if ($this->User->hasAny(array('User.username' => $this->request->data['User']['username']))) {
                $this->set("res",array(
                    'error'=>"username",
                    'meg'=>'Username already exist!!!'
                ));
                $this->response->type('json');
                $this->render('/Common/ajax','ajax');
            } else {
                if ($this->User->hasAny(array('User.email' => $this->request->data['User']['email']))) {
                   $this->set("res",array(
                    'error'=>"email",
                    'meg'=>'that email already has an active account, would you like to go to the login page?'
                ));
                $this->response->type('json');
                $this->render('/Common/ajax','ajax');
                } else {
            $this->User->create();
            if($this->User->save($this->request->data)){
                $this->set("res",array('r'=>1));
                $this->response->type('json');
                $this->render('/Common/ajax','ajax');
             }
           }
        }
      }
    }

    public function profile() {
        $profile_user = $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id'))));
        $this->set('profiles', $profile_user);
        $uname = $profile_user['User']['username'];
        if($uname){
            $uname = 5;            
        }        
        $email = $profile_user['User']['email'];
        if($email){
            $email = 5;            
        }        
        $ptitle = $profile_user['User']['profile_title'];
        if($ptitle){
            $ptitle = 5;            
        }        
        $ayou = $profile_user['User']['about_you'];
        if($ayou){
            $ayou = 2;            
        }
        $uwant = $profile_user['User']['you_want'];
        if($uwant){
            $uwant = 2;            
        }        
        $img = $profile_user['User']['image'];
        if($img){
            $img = 5;            
        }        
        $country = $profile_user['User']['country'];
        if($country){
            $country = 2;            
        }        
        $phone_no = $profile_user['User']['contact_no'];
        if($phone_no){
            $phone_no = 5;            
        }
        $gender = $profile_user['User']['gender'];
         if($gender){
            $gender = 2;            
        }        
        $race = $profile_user['User']['race'];
        if($race){
            $race = 1;            
        }        
        $hght = $profile_user['User']['height'];
        if($hght){
            $hght = 2;            
        }        
        $wght = $profile_user['User']['weight'];
        if($wght){
            $wght = 2;            
        }
        $btype = $profile_user['User']['body_type'];
        if($btype){
            $btype = 2;            
        }        
        $hcolor = $profile_user['User']['hair_color'];
        if($hcolor){
            $hcolor = 2;            
        }        
        $ecolor = $profile_user['User']['eye_color'];
        if($ecolor){
            $ecolor = 2;            
        }        
        $aday = $profile_user['User']['age_day'];
        if($aday){
            $aday = 1;            
        }
        $amnth = $profile_user['User']['age_month'];
        if($amnth){
            $amnth = 1;            
        }
        $ayear = $profile_user['User']['age_year'];
        if($ayear){
            $ayear = 1;            
        }
        $mstatus = $profile_user['User']['marital_status'];
        if($mstatus){
            $mstatus = 1;            
        }
        $smoking = $profile_user['User']['smoking'];
        if($smoking){
            $smoking = 1;            
        }
        $drnk = $profile_user['User']['drinking'];
        if($drnk){
            $drnk = 1;            
        }
//        $spks = $profile_user['User']['langauge'];
//        if($spks){
//            $spks = 2;            
//        }
        $rlgn = $profile_user['User']['religion'];
        if($rlgn){
            $rlgn = 1;            
        }
        $edcton = $profile_user['User']['education'];
        if($edcton){
            $edcton = 3;            
        }
        $aincome = $profile_user['User']['annual_income'];
        if($aincome){
            $aincome = 2;            
        }
        $lang = $profile_user['User']['language'];
        if($lang){
            $lang = 3;            
        }
        $seekgen = $profile_user['User']['seeking_gender'];
        if($seekgen){
            $seekgen = 3;            
        }
        $seekha = $profile_user['User']['seeking_hair'];
        if($seekha){
            $seekha = 2;            
        }
        $seekey = $profile_user['User']['seeking_eyes'];
        if($seekey){
            $seekey = 2;            
        }
        $seekmar = $profile_user['User']['seeking_marital_status'];
        if($seekmar){
            $seekmar = 2;            
        }
        $seekra = $profile_user['User']['seeking_race'];
        if($seekra){
            $seekra = 2;            
        }
        $seekfor = $profile_user['User']['seeking_for'];
        if($seekfor){
            $seekfor = 3;            
        }
        $seekdis = $profile_user['User']['seeking_distance'];
        if($seekdis){
            $seekdis = 2;            
        }
        $seekage = $profile_user['User']['seeking_age'];
        if($seekage){
            $seekage = 3;            
        }
        $seekhght = $profile_user['User']['seeking_height'];
        if($seekhght){
            $seekhght = 2;            
        }
        $seekWght = $profile_user['User']['seeking_Weight'];
        if($seekWght){
            $seekWght = 2;            
        }
        $seekbody = $profile_user['User']['seeking_body_type'];
        if($seekbody){ 
            $seekbody = 2;            
        }
        $seeksmok = $profile_user['User']['seeking_smoking'];
        if($seeksmok){
            $seeksmok = 2;            
        }
        $seekdrink = $profile_user['User']['seeking_drinking'];
        if($seekdrink){
            $seekdrink = 2;            
        }
        $seekreligion = $profile_user['User']['seeking_religion'];
        if($seekreligion){
            $seekreligion = 2;            
        }
        $seekeducat = $profile_user['User']['seeking_education'];
        if($seekeducat){
            $seekeducat = 2;            
        }
        $seekannual = $profile_user['User']['seeking_annual_income'];
        if($seekannual){
            $seekannual = 2;            
        }
        $seekagemin = $profile_user['User']['seeking_age_min'];
        if($seekagemin){
            $seekagemin = 1;            
        }
        $seekage_max = $profile_user['User']['seeking_age_max'];
        if($seekage_max){
            $seekage_max = 1;            
        }
        $status = $profile_user['User']['status'];
        if($status){
            $status = 1;            
        }
        $role = $profile_user['User']['role'];
        if($role){
            $role = 1;            
        }
        $ip = $profile_user['User']['ip'];
        if($ip){
            $ip = 1;            
        }
        $crrrentl = $profile_user['User']['current_location'];
        if($crrrentl){
            $crrrentl = 3;            
        }     
        $all_data = $uname + $email + $ptitle + $ayou + $uwant + $img + $country + $phone_no + $gender + $race + $hght + $wght + $btype + $hcolor + $ecolor + $aday + $amnth
                    + $ayear + $mstatus + $smoking + $drnk + $rlgn + $edcton + $aincome + $lang + $seekgen + $seekWght + $seekage + $seekage_max
                    + $seekagemin + $seekannual + $seekbody + $seekdis +$seekdrink + $seekeducat + $seekey +$seekfor + $seekha + $seekhght + $seekmar + $seekra
                    + $seekreligion + $seeksmok + $status + $role + $ip +$crrrentl;
        $ds = $all_data * 100;
        $parcentage_user = $ds / 100;
        $this->set('puser',$parcentage_user);        
        
        $data = $this->User->find('all', array('conditions' => array('User.role' => 'Admin'),'order' => 'RAND()'));
        $this->set('allData', $data);
        
        Configure::write('debug',0);
        if ($this->request->is('post')) {
            $seeking_min = $this->request->data['User']['seeking_age_min'];            
            $seeking_max = $this->request->data['User']['seeking_age_max'];            
            ob_start();
            $url = "/Users/search?&seeking_age_min=" . $seeking_min . "&seeking_age_max=" . $seeking_max;
            //debug($url);exit;
            $this->redirect($url);
        }
    }    
    
    public function myprofile($id=NULL){
        $profile_user = $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id'))));        
        $this->set('myprofiles', $profile_user);
        
        $uname = $profile_user['User']['username'];
        if($uname){
            $uname = 5;            
        }        
        $email = $profile_user['User']['email'];
        if($email){
            $email = 5;            
        }        
        $ptitle = $profile_user['User']['profile_title'];
        if($ptitle){
            $ptitle = 5;            
        }        
        $ayou = $profile_user['User']['about_you'];
        if($ayou){
            $ayou = 2;            
        }
        $uwant = $profile_user['User']['you_want'];
        if($uwant){
            $uwant = 2;            
        }        
        $img = $profile_user['User']['image'];
        if($img){
            $img = 5;            
        }        
        $country = $profile_user['User']['country'];
        if($country){
            $country = 2;            
        }        
        $phone_no = $profile_user['User']['contact_no'];
        if($phone_no){
            $phone_no = 5;            
        }
        $gender = $profile_user['User']['gender'];
         if($gender){
            $gender = 2;            
        }        
        $race = $profile_user['User']['race'];
        if($race){
            $race = 1;            
        }        
        $hght = $profile_user['User']['height'];
        if($hght){
            $hght = 2;            
        }        
        $wght = $profile_user['User']['weight'];
        if($wght){
            $wght = 2;            
        }
        $btype = $profile_user['User']['body_type'];
        if($btype){
            $btype = 2;            
        }        
        $hcolor = $profile_user['User']['hair_color'];
        if($hcolor){
            $hcolor = 2;            
        }        
        $ecolor = $profile_user['User']['eye_color'];
        if($ecolor){
            $ecolor = 2;            
        }        
        $aday = $profile_user['User']['age_day'];
        if($aday){
            $aday = 1;            
        }
        $amnth = $profile_user['User']['age_month'];
        if($amnth){
            $amnth = 1;            
        }
        $ayear = $profile_user['User']['age_year'];
        if($ayear){
            $ayear = 1;            
        }
        $mstatus = $profile_user['User']['marital_status'];
        if($mstatus){
            $mstatus = 1;            
        }
        $smoking = $profile_user['User']['smoking'];
        if($smoking){
            $smoking = 1;            
        }
        $drnk = $profile_user['User']['drinking'];
        if($drnk){
            $drnk = 1;            
        }
        $rlgn = $profile_user['User']['religion'];
        if($rlgn){
            $rlgn = 1;            
        }
        $edcton = $profile_user['User']['education'];
        if($edcton){
            $edcton = 3;            
        }
        $aincome = $profile_user['User']['annual_income'];
        if($aincome){
            $aincome = 2;            
        }
        $lang = $profile_user['User']['language'];
        if($lang){
            $lang = 5;            
        }
        $seekgen = $profile_user['User']['seeking_gender'];
        if($seekgen){
            $seekgen = 3;            
        }
        $seekha = $profile_user['User']['seeking_hair'];
        if($seekha){
            $seekha = 2;            
        }
        $seekey = $profile_user['User']['seeking_eyes'];
        if($seekey){
            $seekey = 2;            
        }
        $seekmar = $profile_user['User']['seeking_marital_status'];
        if($seekmar){
            $seekmar = 2;            
        }
        $seekra = $profile_user['User']['seeking_race'];
        if($seekra){
            $seekra = 2;            
        }
        $seekfor = $profile_user['User']['seeking_for'];
        if($seekfor){
            $seekfor = 3;            
        }
        $seekdis = $profile_user['User']['seeking_distance'];
        if($seekdis){
            $seekdis = 2;            
        }
        $seekage = $profile_user['User']['seeking_age'];
        if($seekage){
            $seekage = 3;            
        }
        $seekhght = $profile_user['User']['seeking_height'];
        if($seekhght){
            $seekhght = 2;            
        }
        $seekWght = $profile_user['User']['seeking_Weight'];
        if($seekWght){
            $seekWght = 2;            
        }
        $seekbody = $profile_user['User']['seeking_body_type'];
        if($seekbody){ 
            $seekbody = 2;            
        }
        $seeksmok = $profile_user['User']['seeking_smoking'];
        if($seeksmok){
            $seeksmok = 2;            
        }
        $seekdrink = $profile_user['User']['seeking_drinking'];
        if($seekdrink){
            $seekdrink = 2;            
        }
        $seekreligion = $profile_user['User']['seeking_religion'];
        if($seekreligion){
            $seekreligion = 2;            
        }
        $seekeducat = $profile_user['User']['seeking_education'];
        if($seekeducat){
            $seekeducat = 2;            
        }
        $seekannual = $profile_user['User']['seeking_annual_income'];
        if($seekannual){
            $seekannual = 2;            
        }
        $seekagemin = $profile_user['User']['seeking_age_min'];
        if($seekagemin){
            $seekagemin = 1;            
        }
        $seekage_max = $profile_user['User']['seeking_age_max'];
        if($seekage_max){
            $seekage_max = 1;            
        }
        $status = $profile_user['User']['status'];
        if($status){
            $status = 1;            
        }
        $role = $profile_user['User']['role'];
        if($role){
            $role = 1;            
        }
        $ip = $profile_user['User']['ip'];
        if($ip){
            $ip = 1;            
        }
        $crrrentl = $profile_user['User']['current_location'];
        if($crrrentl){
            $crrrentl = 3;            
        }
        $all_data = $uname + $email + $ptitle + $ayou + $uwant + $img + $country + $phone_no + $gender + $race + $hght + $wght + $btype + $hcolor + $ecolor + $aday + $amnth
                    + $ayear + $mstatus + $smoking + $drnk + $rlgn + $edcton + $aincome + $lang + $seekgen + $seekWght + $seekage + $seekage_max
                    + $seekagemin + $seekannual + $seekbody + $seekdis +$seekdrink + $seekeducat + $seekey +$seekfor + $seekha + $seekhght + $seekmar + $seekra
                    + $seekreligion + $seeksmok + $status + $role + $ip +$crrrentl;
        $ds = $all_data * 100;
        $parcentage_user = $ds / 100;
        $this->set('puser',$parcentage_user);
        
        $view_profileW = $this->User->find('first',array('conditions'=>array('User.id'=>$id)));
        $this->set('profilewoman',$view_profileW);
        
        Configure::write('debug',2);
        if ($this->request->is('post')) {
            $seeking_min = $this->request->data['User']['seeking_age_min'];            
            $seeking_max = $this->request->data['User']['seeking_age_max'];            
            ob_start();
            $url = "/Users/search?&seeking_age_min=" . $seeking_min . "&seeking_age_max=" . $seeking_max;
            $this->redirect($url);
        }
    }

    public function editprofile($id=NULL){
        Configure::write('debug',2);
        $profile_user = $this->User->find('first', array('conditions' => array('User.id' => $id)));
        //debug($profile_user);exit;
        $this->set('myprofiles', $profile_user);
        
        $uname = $profile_user['User']['username'];
        if($uname){
            $uname = 5;            
        }        
        $email = $profile_user['User']['email'];
        if($email){
            $email = 5;            
        }        
        $ptitle = $profile_user['User']['profile_title'];
        if($ptitle){
            $ptitle = 5;            
        }        
        $ayou = $profile_user['User']['about_you'];
        if($ayou){
            $ayou = 2;            
        }
        $uwant = $profile_user['User']['you_want'];
        if($uwant){
            $uwant = 2;            
        }        
        $img = $profile_user['User']['image'];
        if($img){
            $img = 5;            
        }        
        $country = $profile_user['User']['country'];
        if($country){
            $country = 2;            
        }        
        $phone_no = $profile_user['User']['contact_no'];
        if($phone_no){
            $phone_no = 5;            
        }
        $gender = $profile_user['User']['gender'];
         if($gender){
            $gender = 2;            
        }        
        $race = $profile_user['User']['race'];
        if($race){
            $race = 1;            
        }        
        $hght = $profile_user['User']['height'];
        if($hght){
            $hght = 2;            
        }        
        $wght = $profile_user['User']['weight'];
        if($wght){
            $wght = 2;            
        }
        $btype = $profile_user['User']['body_type'];
        if($btype){
            $btype = 2;            
        }        
        $hcolor = $profile_user['User']['hair_color'];
        if($hcolor){
            $hcolor = 2;            
        }        
        $ecolor = $profile_user['User']['eye_color'];
        if($ecolor){
            $ecolor = 2;            
        }        
        $aday = $profile_user['User']['age_day'];
        if($aday){
            $aday = 1;            
        }
        $amnth = $profile_user['User']['age_month'];
        if($amnth){
            $amnth = 1;            
        }
        $ayear = $profile_user['User']['age_year'];
        if($ayear){
            $ayear = 1;            
        }
        $mstatus = $profile_user['User']['marital_status'];
        if($mstatus){
            $mstatus = 1;            
        }
        $smoking = $profile_user['User']['smoking'];
        if($smoking){
            $smoking = 1;            
        }
        $drnk = $profile_user['User']['drinking'];
        if($drnk){
            $drnk = 1;            
        }
        $rlgn = $profile_user['User']['religion'];
        if($rlgn){
            $rlgn = 1;            
        }
        $edcton = $profile_user['User']['education'];
        if($edcton){
            $edcton = 3;            
        }
        $aincome = $profile_user['User']['annual_income'];
        if($aincome){
            $aincome = 2;            
        }
        $lang = $profile_user['User']['language'];
        if($lang){
            $lang = 5;            
        }
        $seekgen = $profile_user['User']['seeking_gender'];
        if($seekgen){
            $seekgen = 3;            
        }
        $seekha = $profile_user['User']['seeking_hair'];
        if($seekha){
            $seekha = 2;            
        }
        $seekey = $profile_user['User']['seeking_eyes'];
        if($seekey){
            $seekey = 2;            
        }
        $seekmar = $profile_user['User']['seeking_marital_status'];
        if($seekmar){
            $seekmar = 2;            
        }
        $seekra = $profile_user['User']['seeking_race'];
        if($seekra){
            $seekra = 2;            
        }
        $seekfor = $profile_user['User']['seeking_for'];
        if($seekfor){
            $seekfor = 3;            
        }
        $seekdis = $profile_user['User']['seeking_distance'];
        if($seekdis){
            $seekdis = 2;            
        }
        $seekage = $profile_user['User']['seeking_age'];
        if($seekage){
            $seekage = 3;            
        }
        $seekhght = $profile_user['User']['seeking_height'];
        if($seekhght){
            $seekhght = 2;            
        }
        $seekWght = $profile_user['User']['seeking_Weight'];
        if($seekWght){
            $seekWght = 2;            
        }
        $seekbody = $profile_user['User']['seeking_body_type'];
        if($seekbody){ 
            $seekbody = 2;            
        }
        $seeksmok = $profile_user['User']['seeking_smoking'];
        if($seeksmok){
            $seeksmok = 2;            
        }
        $seekdrink = $profile_user['User']['seeking_drinking'];
        if($seekdrink){
            $seekdrink = 2;            
        }
        $seekreligion = $profile_user['User']['seeking_religion'];
        if($seekreligion){
            $seekreligion = 2;            
        }
        $seekeducat = $profile_user['User']['seeking_education'];
        if($seekeducat){
            $seekeducat = 2;            
        }
        $seekannual = $profile_user['User']['seeking_annual_income'];
        if($seekannual){
            $seekannual = 2;            
        }
        $seekagemin = $profile_user['User']['seeking_age_min'];
        if($seekagemin){
            $seekagemin = 1;            
        }
        $seekage_max = $profile_user['User']['seeking_age_max'];
        if($seekage_max){
            $seekage_max = 1;            
        }
        $status = $profile_user['User']['status'];
        if($status){
            $status = 1;            
        }
        $role = $profile_user['User']['role'];
        if($role){
            $role = 1;            
        }
        $ip = $profile_user['User']['ip'];
        if($ip){
            $ip = 1;            
        }
        $crrrentl = $profile_user['User']['current_location'];
        if($crrrentl){
            $crrrentl = 3;            
        }
        $all_data = $uname + $email + $ptitle + $ayou + $uwant + $img + $country + $phone_no + $gender + $race + $hght + $wght + $btype + $hcolor + $ecolor + $aday + $amnth
                    + $ayear + $mstatus + $smoking + $drnk + $rlgn + $edcton + $aincome + $lang + $seekgen + $seekWght + $seekage + $seekage_max
                    + $seekagemin + $seekannual + $seekbody + $seekdis +$seekdrink + $seekeducat + $seekey +$seekfor + $seekha + $seekhght + $seekmar + $seekra
                    + $seekreligion + $seeksmok + $status + $role + $ip +$crrrentl;
        $ds = $all_data * 100;
        $parcentage_user = $ds / 100;
        $this->set('puser',$parcentage_user);
        
        Configure::write('debug',2);
        if ($this->request->is('post')) {
            $seeking_min = $this->request->data['User']['seeking_age_min'];            
            $seeking_max = $this->request->data['User']['seeking_age_max'];            
            ob_start();
            $url = "/Users/search?&seeking_age_min=" . $seeking_min . "&seeking_age_max=" . $seeking_max;
            $this->redirect($url);
        }
        $this->User->recursive=3;         
         $Office=$this->User->find('first'
                 ,array(
                     'conditions'=>
                        array(
                            "AND"=>
                            array(
                                'User.status'=>1
                                ,'User.id'=>$id)))
                            );
         $this->set('offices',$Office);
        //debug($Office);exit;
        
    }
    
    public function change_profilepic(){        
        if($this->request->is('post')){
            $files=  $this->request->data['User']['image'];
            move_uploaded_file($files['tmp_name'],'files/user/'.$files['name']);
            $this->request->data['User']['id']=$this->Auth->user('id');
            $this->request->data['User']['image']='files/user/'.$files['name'];
            if($this->User->save($this->request->data)){
                $this->redirect(array('action' => 'editprofile'));
            }
        }
       $res= $this->User->find('first',array('conditions'=>array('User.id'=>$this->Auth->user('id'))));
       $this->set('image_change',$res);
      
    }
    
    
    public function about($id=NULL){
        $this->User->id=$id;
       // debug($this->request->data);exit;
       if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('your Personal details has been saved'));
                return $this->redirect(array('action' => 'editprofile/',$id));
            } else {
                $this->Session->setFlash(__('your Personal details could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        } 
    }
    
    public function physical($id=NULL){
        $this->User->id=$id;
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('your Personal details has been saved'));
                return $this->redirect(array('action' => 'editprofile/',$id));
            } else {
                $this->Session->setFlash(__('your Personal details could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $this->set('physicalEdit', $data=$this->User->find('first', array('conditions' => array('User.id' => $id))));
        //debug($data);exit;
    }
    
    
    public function seeking($id=NULL){
        $this->User->id=$id;
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('your Personal details has been saved'));
                return $this->redirect(array('action' => 'editprofile/',$id));
            } else {
                $this->Session->setFlash(__('your Personal details could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $this->set('seekingedit', $data=$this->User->find('first', array('conditions' => array('User.id' => $id))));
        //debug($data);exit;
    }
    
    public function upload_photo($id=NULL){
        $this->User->id = $id;
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid User'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $files = $this->request->data['User']['image'];
            $ram = array();
            foreach ($files as $f) {

                move_uploaded_file($f['tmp_name'], 'files/user/' . $f['name']);
                $ram[] = $this->request->data['User']['image'] = $f['name'];
//                debug($f['name']);exit;
            }
            $this->request->data['User']['image'] = serialize($ram);
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The Member Photo has been saved.'));
                return $this->redirect(array('action' => 'upload_photo/',$id));
            } else {
                $this->Session->setFlash(__('The Member Photo could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
    }
    

    

    public function search(){
        $profile_user = $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id'))));        
        $this->set('myprofiles', $profile_user);
        
        $data = $this->User->find('all', array('conditions' => array('User.role' => 'Admin'),'order' => 'RAND()'));
        $this->set('allData', $data);
        
         Configure::write('debug',0);
         if (isset($this->request->params['named']['access'])) {
            $this->request->data = $this->Session->read('rq.data');
            $agemin = $this->request->data['User']['seeking_age_min'];
            $agemax = $this->request->data['User']['seeking_age_max'];
            $this->Paginator->settings = array(
                'conditions' => array(
                    "AND" => array(
                        "User.seeking_age_min >=" => $agemin,
                        "User.seeking_age_max <=" => $agemax,
                    )
                ),
                'limit' => 5
            );
            $this->set("users_search", $this->Paginator->paginate('User'));
            $this->render('search');
            return;
        }
        if ($this->request->is('post') || isset($this->request->params['named']['access'])) {
            $this->Session->delete("rq.data");
            $this->Session->write("rq.data", $this->request->data);
            $agemin = $this->request->data['User']['seeking_age_min'];
            $agemax = $this->request->data['User']['seeking_age_max'];
             $this->Paginator->settings = array(
                'conditions' => array(
                    "AND" => array(
                        "User.seeking_age_min >=" => $agemin,
                        "User.seeking_age_max <=" => $agemax,
                    )
                ),
                'limit' => 5
            );
             //debug($agemax);exit;
            $this->set("users_search", $this->Paginator->paginate('User'));
            $this->set("access", true);
//        } elseif (!isset($this->request->params['named']['access'])) {
//            $price_from = $_GET['price_from'];
//            $price_to = $_GET['price_to'];
//         if ($region != NULL) {
//                $reg = explode(',', $region);
//                $x = $this->Paginator->settings = array(
//                    'conditions' => array(
//                        'Buy.region' => $reg
//                    ),
//                    'limit' => 2
//                );
//                $this->set("buys", $this->Paginator->paginate('Buy'));
//            }
        }
    }

    public function test(){
        
    }
}
