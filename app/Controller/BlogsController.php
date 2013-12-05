<?php

App::uses('AppController', 'Controller');

/**
 * Blogs Controller
 *
 * @property Blog $Blog
 * @property PaginatorComponent $Paginator
 */
class BlogsController extends AppController {

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
		$this->layout = "admin";
		$this->Blog->recursive = 0;
		$this->set('blogs', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->Blog->exists($id)) {
			throw new NotFoundException(__('Invalid blog'));
		}
		$options = array('conditions' => array('Blog.' . $this->Blog->primaryKey => $id));
		$this->set('blog', $this->Blog->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		$this->layout = "admin";
		if ($this->request->is('post')) {
			$this->Blog->create();
			if ($this->Blog->save($this->request->data)) {
				$this->Session->setFlash(
						('Novi blog post uspješno dodan'), 'alert', array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
						)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog could not be saved. Please, try again.'));
			}
		}
		$users = $this->Blog->User->find('list');
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
		$this->layout = "admin";

		if (!$this->Blog->exists($id)) {
			throw new NotFoundException(__('Invalid blog'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Blog->save($this->request->data)) {
				$this->Session->setFlash(
						('Uspješna izmjena blog posta'), 'alert', array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
						)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Blog.' . $this->Blog->primaryKey => $id));
			$this->request->data = $this->Blog->find('first', $options);
		}
		$users = $this->Blog->User->find('list');
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
		$this->Blog->id = $id;
		if (!$this->Blog->exists()) {
			throw new NotFoundException(__('Invalid blog'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Blog->delete()) {
			$this->Session->setFlash(__('The blog has been deleted.'));
		} else {
			$this->Session->setFlash(__('The blog could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
