<?php

App::uses('AppController', 'Controller');

/**
 * Terms Controller
 *
 * @property Term $Term
 * @property PaginatorComponent $Paginator
 */
class TermsController extends AppController {

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
		$this->Term->recursive = 0;
		$this->set('terms', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->Term->exists($id)) {
			throw new NotFoundException(__('Invalid term'));
		}
		$options = array('conditions' => array('Term.' . $this->Term->primaryKey => $id));
		$this->set('term', $this->Term->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add($id) {
		$this->layout = "admin";
		if ($this->request->is('post')) {
			$this->Term->create();
			if ($this->Term->save($this->request->data)) {
					$this->Session->setFlash(
						('Novi termin dodan'), 'alert', array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
						)
				);
				return $this->redirect(array('action' => 'add', $id));
			} else {
				$this->Session->setFlash(__('The term could not be saved. Please, try again.'));
			}
		}
		$options = array('conditions' => array('id' => $id));
		$travels = $this->Term->Travel->find('list', $options);

		$this->set(compact('travels'));

		if (!empty($id)) {
			$options = array('conditions' => array('id' => $id));
		}

		$options = array('conditions' => array('Term.travel_id' => $id));
		$terms = $this->Term->find('all', $options);
		$this->set('terms', $terms);
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this->Term->exists($id)) {
			throw new NotFoundException(__('Invalid term'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Term->save($this->request->data)) {
				$this->Session->setFlash(__('The term has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The term could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Term.' . $this->Term->primaryKey => $id));
			$this->request->data = $this->Term->find('first', $options);
		}
		$travels = $this->Term->Travel->find('list');
		$this->set(compact('travels'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->Term->id = $id;
		if (!$this->Term->exists()) {
			throw new NotFoundException(__('Invalid term'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Term->delete()) {
			$this->Session->setFlash(__('The term has been deleted.'));
		} else {
			$this->Session->setFlash(__('The term could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
