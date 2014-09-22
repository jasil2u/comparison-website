<?php
App::uses('AppController', 'Controller');
/**
 * Specifications Controller
 *
 * @property Specification $Specification
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SpecificationsController extends AppController {

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
		$this->Specification->recursive = 0;
		$this->set('specifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		Configure::write('debug', 2);
		debug($this->data);
		$specification=$this->Specification->find('first',array('conditions'=>array('Specification.id'=>$id)));
		debug($specification);
		$this->set(compact('specification'));
		if(!$specification){
			throw new NotFoundException(__('Invalid user'));
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Specification->create();
			if ($this->Specification->save($this->request->data)) {
				$this->Session->setFlash(__('The specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specification could not be saved. Please, try again.'));
			}
		}
		$mobileDetails = $this->Specification->MobileDetail->find('list');
		$this->set(compact('mobileDetails'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Specification->exists($id)) {
			throw new NotFoundException(__('Invalid specification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Specification->save($this->request->data)) {
				$this->Session->setFlash(__('The specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Specification.' . $this->Specification->primaryKey => $id));
			$this->request->data = $this->Specification->find('first', $options);
		}
		$mobileDetails = $this->Specification->MobileDetail->find('list');
		$this->set(compact('mobileDetails'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Specification->id = $id;
		if (!$this->Specification->exists()) {
			throw new NotFoundException(__('Invalid specification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Specification->delete()) {
			$this->Session->setFlash(__('The specification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The specification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
