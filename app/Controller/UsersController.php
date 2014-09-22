<?php
App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */

	public $components =array('Paginator','Session','Auth'  => array(
   'loginRedirect'=>array('controller'=>'users', 'action'=>'dashboard'), 
   'logoutRedirect'=>array('controller'=>'users','action'=>'login')));
        public function beforeFilter(){
	    $this->Auth->allow('login','add');
	}
	public function login()
    {		
    if ($this->request->is('post')) 
     {
        if($this->Auth->login())  
            { 
             	return $this->redirect($this->Auth->redirect());   
         	        
              } 
        else 
         {
            $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
         }
    }
   }
   
   public function logout()
	 {
	 		$this->Session->setFlash('Sucessfully logged out.');
      $this->redirect($this->Auth->logout());
     }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		if($this->Session->read('Auth.User.login_type')!='admin'){
			echo'You dont have access for this page';
			exit;
		}
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
		debug($this->data);
		$userDetail=$this->User->find('first',array('conditions'=>array('User.id'=>$id)));
		debug($userDetail);
		$this->set(compact('userDetail'));
		if(!$userDetail){
			throw new NotFoundException(__('Invalid user'));
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
        debug($this->data);
        if($this->request->is('post')) {
            $this->User->create();
            $add=null;
            $add['User']['username']= $this->data['User']['username'];
            $add['User']['password']= $this->data['User']['password'];
            $add['User']['login_type']='user';
            $add['User']['active']= 'Y';
            if($this->User->save($add)){
            	 $lastid = $this->User->getInsertID();
                debug($lastid);
                $this->loadModel('customer');
                $add_profiles=null;
                $add_profiles['customer']['user_id'] = $lastid;
                $add_profiles['customer']['name'] = $this->data['User']['name'];
            debug($add_profiles);
                $this->customer->save($add_profiles);
                $this->Session->setFlash(__('Sucessfully signed in'));
                return $this->redirect(array('action' => 'login'));
            }else{
                $this->Session->setFlash('The user could not be saved. Please, try again.');
            }
        }
    }


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		debug($this->data);
		$this->User->recursive = 0;
		$user=$this->User->find('first',array('conditions'=>array('User.id'=>$id)));
		debug($user);
		$this->set(compact('user'));
		
        if($this->data){
			 $edit=null;
		debug($id);
			 $edit['User']['id'] =$id;
			 $edit['User']['username'] =$this->data['User']['username'];
			 $edit['User']['password'] =$this->data['User']['password'];
		    if($this->User->save($edit)){
             $edits=null;   
             $this->loadModel('Customer');
			 $edits['Customer']['id']=$user['Customer']['id'];
			 $edits['Customer']['name'] =$this->data['User']['name'];
			 if($this->Customer->save($edits)){
			 	$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			 }else{
			 	$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			 }
		}
	}
}
		
		
		
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
 

 
	public function delete($id = null) { 
		$this->autoRender=false;
		if($id){
			$this->loadModel('customer'); 
			$userProfile=$this->customer->find('first',array('conditions'=>array('customer.user_id'=>$id)));
			if($userProfile){
				$this->customer->delete($userProfile['customer']['id']);
			}
			 
			if ($this->User->delete($id)) {
			   $this->Session->setFlash(__('The user has been deleted.'));
			   
			} else {
				$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
			}
			return $this->redirect(array('action' => 'index'));
		}else{
			throw new NotFoundException(__('Invalid user'));
		}
	}
		
		public function dashboard(){
    		if($this->Session->read('Auth.User.login_type')=='admin'){
			//echo ($this->Session->read('Auth.User.login_type'));
				$this->redirect(array ('action' => 'index' ));
			
			}elseif($this->Session->read('Auth.User.login_type')=='user'){
				//echo ($this->Session->read('Auth.User.login_type'));
				$this->redirect(array ('controller'=>'Customers','action' => 'customer_dashboard' ));
			}
 	 }
	
}
	