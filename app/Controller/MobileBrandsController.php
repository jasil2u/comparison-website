<?php
App::uses('AppController', 'Controller');
/**
 * MobileBrands Controller
 *
 * @property MobileBrand $MobileBrand
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MobileBrandsController extends AppController {

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
		$this->MobileBrand->recursive = 0;
		$this->set('mobileBrands', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MobileBrand->exists($id)) {
			throw new NotFoundException(__('Invalid mobile brand'));
		}
		$options = array('conditions' => array('MobileBrand.' . $this->MobileBrand->primaryKey => $id));
		$this->set('mobileBrand', $this->MobileBrand->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MobileBrand->create();
			if ($this->MobileBrand->save($this->request->data)) {
				$this->Session->setFlash(__('The mobile brand has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mobile brand could not be saved. Please, try again.'));
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
		if (!$this->MobileBrand->exists($id)) {
			throw new NotFoundException(__('Invalid mobile brand'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MobileBrand->save($this->request->data)) {
				$this->Session->setFlash(__('The mobile brand has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mobile brand could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MobileBrand.' . $this->MobileBrand->primaryKey => $id));
			$this->request->data = $this->MobileBrand->find('first', $options);
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
		$this->MobileBrand->id = $id;
		if (!$this->MobileBrand->exists()) {
			throw new NotFoundException(__('Invalid mobile brand'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MobileBrand->delete()) {
			$this->Session->setFlash(__('The mobile brand has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mobile brand could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
