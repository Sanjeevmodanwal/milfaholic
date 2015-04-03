<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');
$mailComp = new CakeEmail();

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
     var $helpers = array('Html');
    
 public $components = array('Auth','Session',);
    
    public function beforeFilter() {
        //phpinfo();
        //exit;
        $this->Auth->authenticate = array(
            AuthComponent::ALL => array(
                'userModel' => 'User',
                'fields' => array('username' => 'username')
                ),          
            'Form' => array(   
                    'fields' => array('username' => 'username'),  
                    'scope'  => array('User.status' => 1) 
                    )
            );
            $this->set("fbLoginUrl",$this->loginUrl);
            
       if(isset($this->request->params['prefix'])){
           
            $this->layout = "admin";
            $this->Auth->loginAction = "/admin/users/login";
            $this->Auth->logoutRedirect = "/admin/users/login";

        }else{
            $this->layout = "default";
            $this->Auth->loginAction = "/";//"/users/login";
            $this->Auth->logoutRedirect = "/";
        } 
        
        $this->loadModel('User');
        $userid = $this->Auth->User("id");
        $this->set("loggeduser", $ds=$this->User->find("first",array("conditions"=>array("User.id"=>$userid)))); 
        
        
        $g_id = $this->Auth->User("role");
        $this->set('g_id', $g_id);
        
        $this->loadModel('Staticpage');
        $banner_logo=  $this->Staticpage->find('first', array(
            'conditions' => array('AND' => 
                array('Staticpage.status' => '1', 
                    'Staticpage.position' => 'banner logo Profile'
                    )))
                );
        $this->set('bannerLogo',$banner_logo);
        
        $profile_logo=  $this->Staticpage->find('first', array(
            'conditions' => array('AND' => 
                array('Staticpage.status' => '1', 
                    'Staticpage.position' => 'banner logo'
                    )))
                );
        $this->set('profileLogo',$profile_logo);
        
        $foot=$this->Staticpage->find('all',array('conditions'=>array('AND'=>array('Staticpage.position'=>'footer content','Staticpage.status'=>1))));
        $this->set('footer_content',$foot);
        
        
    }
}
