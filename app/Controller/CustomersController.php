<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CustomersController extends AppController {

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
		$this->Customer->recursive = 0;
		$this->set('customers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
		$this->set('customer', $this->Customer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Customer->create();
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
			}
		}
		$users = $this->Customer->User->find('list');
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
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
			$this->request->data = $this->Customer->find('first', $options);
		}
		$users = $this->Customer->User->find('list');
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
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Customer->delete()) {
			$this->Session->setFlash(__('The customer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The customer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function customer_dashboard() {
		debug($this->data);
		echo(array_sum($this->data['User']));
		$this->loadModel('MobileDetail');
		$this->loadModel('MobileBrand');
		$User_id=$this->Session->read('Auth.User.id');
		$user=$this->Customer->find('first',array('conditions'=>array('Customer.user_id'=>$User_id)));
		if($this->data){
			if((array_sum($this->data['User'])) > 0){ 
				$MobileDetails=$this->MobileDetail->find('all',array('conditions'=>array('MobileDetail.mobile_brand_id'=>$this->data['User'])));
			}else{ 
				$MobileDetails=$this->MobileDetail->find('all');
			}
		}else{
			$MobileDetails=$this->MobileDetail->find('all');
		}
		$MobileBrands=$this->MobileBrand->find('all');
		$this->set(compact('MobileBrands','MobileDetails'));
	}
	public function customer_dashboard1() {
		//configure::write('debug',2);
		$this->loadModel('MobileDetail');
		$this->loadModel('Specification');
		if($this->data){
			if((array_sum($this->data['User'])) > 0){ 
				$MobileDetails=$this->MobileDetail->find('all',array('conditions'=>array('MobileDetail.mobile_brand_id'=>$this->data['User'])));
			}else{ 
				$MobileDetails=$this->MobileDetail->find('all');
			}
		}else{
			$MobileDetails=$this->MobileDetail->find('all');
		}
		$this->set(compact('MobileDetails'));
		if($this->data['MobileDetail']['price1']){
				$p1='5000';
				$p2='10000';
				$MobileDetails=$this->MobileDetail->find('all',array('conditions'=>array('MobileDetail.price between ? and ?'=>array($p1,$p2))));
				debug($MobileDetails);
			 $this->set(compact('MobileDetails'));
			}
			if($this->data['MobileDetail']['price2']){
				$p1='10001';
				$p2='15000';
				$MobileDetails=$this->MobileDetail->find('all',array('conditions'=>array('MobileDetail.price between ? and ?'=>array($p1,$p2))));
				debug($MobileDetails);
			 $this->set(compact('MobileDetails'));
			}
			if($this->data['MobileDetail']['price3']){
				$p1='15001';
				$p2='20000';
				$MobileDetails=$this->MobileDetail->find('all',array('conditions'=>array('MobileDetail.price between ? and ?'=>array($p1,$p2))));
				debug($MobileDetails);
			 $this->set(compact('MobileDetails'));
			}
			if($this->data['MobileDetail']['price4']){
				$p1='20000';
				$p2='30000';
				$MobileDetails=$this->MobileDetail->find('all',array('conditions'=>array('MobileDetail.price between ? and ?'=>array($p1,$p2))));
				debug($MobileDetails);
			 $this->set(compact('MobileDetails'));
			}
			if($this->data['MobileDetail']['price5']){
				$p1='30001';
				$p2='40000';
				$MobileDetails=$this->MobileDetail->find('all',array('conditions'=>array('MobileDetail.price between ? and ?'=>array($p1,$p2))));
				debug($MobileDetails);
			 $this->set(compact('MobileDetails'));
			}
			 if($this->data['Specification']['screen1']){
		    	$s1=4;
		    	$s2=4.5;
		    	$Mobilescreen=$this->Specification->find('list',array('conditions'=>array('Specification.screen between ? and ?'=>array($s1,$s2)),'fields'=>array('Specification.mobile_detail_id','Specification.mobile_detail_id')));
		    	$MobileDetails=$this->MobileDetail->find('all',array('conditions'=>array('MobileDetail.id'=>$Mobilescreen)));
		        $this->set(compact('MobileDetails'));}
		    if($this->data['Specification']['screen2']){
		    	$s1=4.5;
		    	$s2=5;
		    	$Mobilescreen=$this->Specification->find('list',array('conditions'=>array('Specification.screen between ? and ?'=>array($s1,$s2)),'fields'=>array('Specification.mobile_detail_id','Specification.mobile_detail_id')));
		    	$MobileDetails=$this->MobileDetail->find('all',array('conditions'=>array('MobileDetail.id'=>$Mobilescreen)));
		     $this->set(compact('MobileDetails'));
		    }
		    if($this->data['Specification']['screen3']){
		    	$s1=5;
		    	$s2=5.5;
		    	$Mobilescreen=$this->Specification->find('list',array('conditions'=>array('Specification.screen between ? and ?'=>array($s1,$s2)),'fields'=>array('Specification.mobile_detail_id','Specification.mobile_detail_id')));
		    	$MobileDetails=$this->MobileDetail->find('all',array('conditions'=>array('MobileDetail.id'=>$Mobilescreen)));
		     $this->set(compact('MobileDetails'));
		    }
		    if($this->data['Specification']['screen4']){
		    	$s1=5.5;
		    	$s2=6;
		    	$Mobilescreen=$this->Specification->find('list',array('conditions'=>array('Specification.screen between ? and ?'=>array($s1,$s2)),'fields'=>array('Specification.mobile_detail_id','Specification.mobile_detail_id')));
		    	$MobileDetails=$this->MobileDetail->find('all',array('conditions'=>array('MobileDetail.id'=>$Mobilescreen)));
		     $this->set(compact('MobileDetails'));
		    }
		     else{
		    	$MobileDetails=$this->MobileDetail->find('all');
		    }
	}
}

