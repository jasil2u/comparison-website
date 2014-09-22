<?php
App::uses('AppController', 'Controller');
CakePlugin::load('Uploader');
App::import('Vendor', 'Uploader.Uploader');

/**
 * MobileDetails Controller
 *
 * @property MobileDetail $MobileDetail
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MobileDetailsController extends AppController {

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
		$this->MobileDetail->recursive = 0;
		$this->set('mobileDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MobileDetail->recursive = 0;
		debug($this->data);
		$mobileDetail=$this->MobileDetail->find('first',array('conditions'=>array('MobileDetail.id'=>$id)));
		debug($mobileDetail);
		
		$this->set(compact('mobileDetail'));
		if(!$mobileDetail){
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
        if($this->request->is('post')) {
        	if($this->data['Upload']['fileName']){
			   $this->Uploader = new Uploader(); 
			   $this->Uploader = new Uploader(array('tempDir' => TMP));
			   $this->Uploader->setup(array('tempDir' => TMP));
			   $this->Uploader->uploadDir = 'files/images';
   			  $upload_data = $this->Uploader->uploadAll(array('fileName'));
			  debug($upload_data);
			}
            $this->MobileDetail->create();
            $add=null;
            $add['MobileDetail']['mobile_brand_id']=$this->data['MobileDetail']['mobile_brand_id'];
            $add['MobileDetail']['model']= $this->data['MobileDetail']['model'];
            $add['MobileDetail']['color']= $this->data['MobileDetail']['color'];
            //$add['MobileDetail']['price']= $this->data['MobileDetail']['price'];
            $add['MobileDetail']['image']= $upload_data['fileName']['path'];
           debug($add);
            if($this->MobileDetail->save($add)){
            	 $lastid_mobiledetail = $this->MobileDetail->getInsertID();
                debug($lastid_mobiledetail);
                $this->loadModel('Specification');
                $this->Specification->create();
                $add_profiles=null;
            $add_profiles['Specification']['mobile_detail_id']=$lastid_mobiledetail;
            $add_profiles['Specification']['primary_camera']= $this->data['MobileDetail']['primary_camera'];
            $add_profiles['Specification']['secondary_camera']= $this->data['MobileDetail']['secondary_camera'];
            $add_profiles['Specification']['os']= $this->data['MobileDetail']['os'];
            $add_profiles['Specification']['screen']= $this->data['MobileDetail']['screen'];
            $add_profiles['Specification']['internal_memory']= $this->data['MobileDetail']['internal_memory'];
            $add_profiles['Specification']['expandable_memory']= $this->data['MobileDetail']['expandable_memory'];
            $add_profiles['Specification']['processor']= $this->data['MobileDetail']['processor'];
            $add_profiles['Specification']['resolution']= $this->data['MobileDetail']['resolution'];
            $add_profiles['Specification']['flash']= $this->data['MobileDetail']['flash'];
            $add_profiles['Specification']['talk_time']= $this->data['MobileDetail']['talk_time'];
            debug($add_profiles);
                $this->Specification->save($add_profiles);
                $this->Session->setFlash(__('Sucessfully added'));
                return $this->redirect(array('action' => 'index'));
            }else{
                $this->Session->setFlash('Data could not be saved. Please, try again.');
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
		$mobiledetail=$this->MobileDetail->find('first',array('conditions'=>array('MobileDetail.id'=>$id)));
		$this->set(compact('mobiledetail'));
		 $this->loadModel('MobileBrand');
		$brandlist=$this->MobileBrand->find('list',array('fields'=>array('MobileBrand.id','MobileBrand.brand'),'order'=>array('MobileBrand.brand ASC')));
        debug($brandlist);
        $this->set(compact('brandlist'));
        $this->loadModel('Specification');
        $specifications=$this->Specification->find('first',array('conditions'=>array('Specification.mobile_detail_id'=>$mobiledetail['MobileDetail']['id'])));
        debug($specifications);
        $this->set(compact('specifications'));
        if($this->data['Upload']['fileName']){
			   $this->Uploader = new Uploader(); 
			   $this->Uploader = new Uploader(array('tempDir' => TMP));
			   $this->Uploader->setup(array('tempDir' => TMP));
			   $this->Uploader->uploadDir = 'files/images';
			  // debug($this->Uploader);
   			  $upload_data = $this->Uploader->uploadAll(array('fileName'));
			  debug($upload_data);
			}
		if($this->data){
			 $edit=null;
		debug($id);
			 $edit['MobileDetail']['id'] =$id;
			 $edit['MobileDetail']['mobile_brand_id'] =$this->data['MobileDetail']['mobile_brand_id'];
			 $edit['MobileDetail']['model'] =$this->data['MobileDetail']['model'];
			 $edit['MobileDetail']['color'] =$this->data['MobileDetail']['color'];
			 $edit['MobileDetail']['price'] =$this->data['MobileDetail']['price'];
			 $edit['MobileDetail']['image'] =$upload_data['fileName']['path'];
			 debug($edit);
            if($this->MobileDetail->save($edit)){
             $edits=null;   
			 $edits['Specification']['id']=$specifications['Specification']['id'];
			 $edits['Specification']['primary_camera'] =$this->data['MobileDetail']['primary_camera'];
			 $edits['Specification']['secondary_camera'] =$this->data['MobileDetail']['secondary_camera'];
			 $edits['Specification']['os'] =$this->data['MobileDetail']['os'];
			 $edits['Specification']['screen'] =$this->data['MobileDetail']['screen'];
			 $edits['Specification']['internal_memory'] =$this->data['MobileDetail']['internal_memory'];
			 $edits['Specification']['expandable_memory'] =$this->data['MobileDetail']['expandable_memory'];
			 $edits['Specification']['processor'] =$this->data['MobileDetail']['processor'];
			 $edits['Specification']['resolution'] =$this->data['MobileDetail']['resolution'];
			 $edits['Specification']['flash'] =$this->data['MobileDetail']['flash'];
			 $edits['Specification']['talk_time'] =$this->data['MobileDetail']['talk_time'];
			 if($this->Specification->save($edits)){
			 	$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			 }else{
			 	$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			 }
		}
	}
}
			
	public function mobile_view($id = null) {
		$this->MobileDetail->recursive = 1;
		$mobileDetail=$this->MobileDetail->find('first',array('conditions'=>array('MobileDetail.id'=>$id)));
		debug($mobileDetail);
		$this->set(compact('mobileDetail'));
	}			
		 

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MobileDetail->id = $id;
		if (!$this->MobileDetail->exists()) {
			throw new NotFoundException(__('Invalid mobile detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MobileDetail->delete()) {
			$this->Session->setFlash(__('The mobile detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mobile detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
