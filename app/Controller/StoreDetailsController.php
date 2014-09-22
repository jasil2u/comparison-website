<?php
App::uses('AppController', 'Controller');
/**
 * StoreDetails Controller
 *
 * @property StoreDetail $StoreDetail
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StoreDetailsController extends AppController {

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
		$this->StoreDetail->recursive = 0;
		/*$storeDetail = $this->StoreDetail->find('all');
		$this->set(compact('storeDetail'));
		debug($storeDetail);*/
		
		
		
		$this->set('storeDetails', $this->Paginator->paginate());
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
		$storeDetail=$this->StoreDetail->find('first',array('conditions'=>array('StoreDetail.id'=>$id)));
		debug($storeDetail);
		$this->set(compact('storeDetail'));
		if(!$storeDetail){
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
        $this->loadModel('MobileBrand');
        $listbrands=$this->MobileBrand->find('list',array('fields'=>array('MobileBrand.id','MobileBrand.brand'),'order'=>array('MobileBrand.brand ASC')));
        debug($listbrands);
        $this->set(compact('listbrands'));
        
        $this->loadModel('MobileDetail');
        $listmodels=$this->MobileDetail->find('list',array('fields'=>array('MobileDetail.id','MobileDetail.model'),'order'=>array('MobileDetail.model ASC')));
        debug($listmodels);
        $this->set(compact('listmodels'));
        if($this->request->is('post')) {
            $this->StoreDetail->create(); 
            $add=null;
            $listbrands=$this->MobileBrand->find('list',array('fields'=>array('MobileBrand.id','MobileBrand.brand'),'order'=>array('MobileBrand.brand ASC')));
            $add['StoreDetail']['mobile_brand_id']=$this->data['StoreDetail']['mobile_brand_id'];
            $add['StoreDetail']['mobile_detail_id']= $this->data['StoreDetail']['mobile_detail_id'];
            $add['StoreDetail']['store_name']= $this->data['StoreDetail']['store_name'];
            $add['StoreDetail']['store_url']= $this->data['StoreDetail']['store_url'];
            $add['StoreDetail']['store_price']= $this->data['StoreDetail']['store_price'];
            debug($add);
            if($this->StoreDetail->save($add)){
            	$this->loadModel('MobileDetail');
            	$store_records=$this->StoreDetail->find('list',array('conditions'=>array('StoreDetail.id'=>$this->StoreDetail->getInsertID(),'StoreDetail.mobile_brand_id'=>$this->data['StoreDetail']['mobile_brand_id']),'fields'=>array('StoreDetail.store_price')));
            	debug($store_records);
            	if($store_records){
            		$min_price=array_search(min($store_records), $store_records); 
            		echo $min_price;
            	}
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
		$storedetail=$this->StoreDetail->find('first',array('conditions'=>array('StoreDetail.id'=>$id)));
		$this->set(compact('storedetail'));
		 $this->loadModel('MobileBrand');
		$listbrands=$this->MobileBrand->find('list',array('fields'=>array('MobileBrand.id','MobileBrand.brand'),'order'=>array('MobileBrand.brand ASC')));
        debug($listbrands);
        $this->set(compact('listbrands'));
        $this->loadModel('MobileDetail');
        $listmodels=$this->MobileDetail->find('list',array('fields'=>array('MobileDetail.id','MobileDetail.model'),'order'=>array('MobileDetail.model ASC')));
        debug($listmodels);
        $this->set(compact('listmodels'));
		if($this->data){
			 $edit=null;
			 $edit['StoreDetail']['id'] =$id;
			 $edit['StoreDetail']['mobile_brand_id'] =$this->data['StoreDetail']['mobile_brand_id'];
			 $edit['StoreDetail']['mobile_detail_id'] =$this->data['StoreDetail']['mobile_detail_id'];
			 $edit['StoreDetail']['store_name'] =$this->data['StoreDetail']['store_name'];
			 $edit['StoreDetail']['store_url'] =$this->data['StoreDetail']['store_url'];
			 $edit['StoreDetail']['store_price'] =$this->data['StoreDetail']['store_price'];
			 if($this->StoreDetail->save($edit)){
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
		$this->StoreDetail->id = $id;
		if (!$this->StoreDetail->exists()) {
			throw new NotFoundException(__('Invalid store detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StoreDetail->delete()) {
			$this->Session->setFlash(__('The store detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The store detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
