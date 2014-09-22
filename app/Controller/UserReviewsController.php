<?php
App::uses('AppController', 'Controller');
/**
 * UserReviews Controller
 *
 * @property UserReview $UserReview
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UserReviewsController extends AppController {

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
		$this->UserReview->recursive = 1;
		$this->set('UserReview', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserReview->exists($id)) {
			throw new NotFoundException(__('Invalid user review'));
		}
		$options = array('conditions' => array('UserReview.' . $this->UserReview->primaryKey => $id));
		$this->set('userReview', $this->UserReview->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
        debug($this->data);
        $this->loadModel('Customer');
        $listcustomers=$this->Customer->find('list',array('fields'=>array('Customer.id','Customer.name'),'order'=>array('Customer.name ASC')));
        debug($listcustomers);
        $this->set(compact('listcustomers'));
        $this->loadModel('MobileDetail');
        $listmodels=$this->MobileDetail->find('list',array('fields'=>array('MobileDetail.id','MobileDetail.model'),'order'=>array('MobileDetail.model ASC')));
        debug($listmodels);
        $this->set(compact('listmodels'));
        if($this->request->is('post')) {
            $this->UserReview->create(); 
            $add=null;
            $add['UserReview']['customer_id']=$this->data['UserReview']['customer_id'];
            $add['UserReview']['mobile_detail_id']= $this->data['UserReview']['mobile_detail_id'];
            $add['UserReview']['rating']=$this->data['UserReview']['rating'];
            $add['UserReview']['review']= $this->data['UserReview']['review'];
            debug($add);
            if($this->UserReview->save($add)){
                $this->Session->setFlash(__('Sucessfully saved'));
                return $this->redirect(array('action' => 'index'));
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
		$userreview=$this->UserReview->find('first',array('conditions'=>array('UserReview.id'=>$id)));
		$this->set(compact('userreview'));
		debug($userreview);
		 $this->loadModel('Customer');
		$customerlist=$this->Customer->find('list',array('fields'=>array('Customer.id','Customer.name'),'order'=>array('Customer.name ASC')));
        debug($customerlist);
        $this->set(compact('customerlist'));
        $this->loadModel('MobileDetail');
        $listmodels=$this->MobileDetail->find('list',array('fields'=>array('MobileDetail.id','MobileDetail.model'),'order'=>array('MobileDetail.model ASC')));
        debug($listmodels);
        $this->set(compact('listmodels'));
		if($this->data){
			 $edit=null;
			 $edit['UserReview']['id'] =$id;
			 $edit['UserReview']['customer_id'] =$this->data['UserReview']['customer_id'];
			 $edit['UserReview']['mobile_detail_id'] =$this->data['UserReview']['mobile_detail_id'];
			 $edit['UserReview']['rating'] =$this->data['UserReview']['rating'];
			 $edit['UserReview']['review'] =$this->data['UserReview']['review'];
			 if($this->UserReview->save($edit)){
			 	$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			 }else{
			 	$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		$this->UserReview->id = $id;
		if (!$this->UserReview->exists()) {
			throw new NotFoundException(__('Invalid user review'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserReview->delete()) {
			$this->Session->setFlash(__('The user review has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user review could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
