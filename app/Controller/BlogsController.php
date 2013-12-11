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
		$this->paginate = array(
			'limit' => 10,
			'order' => 'Blog.created DESC',
		);
		$this->set('blogs', $this->paginate());
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
				$this->Session->setFlash('Blog post dodan', 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Neuspješno dodavanje blog posta', 'alert');
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
				$this->Session->setFlash('Blog post izmijenjen', 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Neuspješna izmjena blog posta', 'alert');
			}
		} else {
			$options = array('conditions' => array('Blog.' . $this->Blog->primaryKey => $id));
			$this->request->data = $this->Blog->find('first', $options);
		}
		$users = $this->Blog->User->find('list');
		$this->set(compact('users'));
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
		$this->Blog->id = $id;
		if (!$this->Blog->exists()) {
			throw new NotFoundException(__('Invalid blog'));
		}
		if ($this->Blog->delete()) {
			$this->Session->setFlash('Blog post uklonjen', 'info');
		} else {
			$this->Session->setFlash('Neuspješno brisanje blog posta', 'alert');
		}
		return $this->redirect(array('action' => 'index'));
	}

}
