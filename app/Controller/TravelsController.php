<?php

App::uses('AppController', 'Controller');

/**
 * Travels Controller
 *
 * @property Travel $Travel
 * @property PaginatorComponent $Paginator
 */
class TravelsController extends AppController {

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
		$this->layout = 'admin';
		$this->Travel->recursive = 0;
		$this->set('travels', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->layout = 'admin';
		if (!$this->Travel->exists($id)) {
			throw new NotFoundException(__('Invalid travel'));
		}
		$options = array(
			'contain' => array('Category'),
			'conditions' => array('Travel.' . $this->Travel->primaryKey => $id));
		$this->set('travel', $this->Travel->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		$this->layout = 'admin';

		$categories = $this->Travel->Category->find('all');
		$this->set(compact('userbooks'));

		if ($this->request->is('post')) {
			$this->Travel->createWithAttachments($this->request->data);
			if ($this->Travel->save($this->request->data)) {
				$this->Session->setFlash(
						('Novo putovanje dodano'), 'alert', array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
						)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The travel could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Travel->Category->find('list');
		$this->set(compact('categories'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		$this->layout = 'admin';

		if (!$this->Travel->exists($id)) {
			throw new NotFoundException(__('Invalid travel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Travel->save($this->request->data)) {
				$this->Session->setFlash(
						('Putovanje uspješno izmijenjeno'), 'alert', array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
						)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The travel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Travel.' . $this->Travel->primaryKey => $id));
			$this->request->data = $this->Travel->find('first', $options);
		}
		$categories = $this->Travel->Category->find('list');
		$this->set(compact('categories'));
		$this->set('id', $id);
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->Travel->id = $id;
		if (!$this->Travel->exists()) {
			throw new NotFoundException(__('Invalid travel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Travel->delete()) {
			$this->Session->setFlash(__('The travel has been deleted.'));
		} else {
			$this->Session->setFlash(__('The travel could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
