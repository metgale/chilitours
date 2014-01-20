<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {


	public $components = array('Paginator');
	//login method
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->setFlash('Uspješna prijava u sustav', 'success');
				return $this->redirect(array(
							'controller' => 'users',
							'action' => 'index'
				));
			} else {
				$this->Session->setFlash('Neuspješna prijava u sustav', 'error');
			}
		}
	}

	//logout method
	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	/**
	 * Components
	 *
	 * @var array
	 */
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->layout = 'admin';
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Korisnik kreiran', 'success');

				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Neuspješno kreiranje korisnika', 'alert');
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
		$this->layout = 'admin';
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Korisnik izmijenjen', 'success');

				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Neuspješna izmjena korisnika', 'alert');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash('Korisnik uklonjen', 'info');
		} else {
			$this->Session->setFlash('Neuspješno brisanje korisnika', 'alert');
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function admin_home() {
		$this->layout = "admin";
	}

}
