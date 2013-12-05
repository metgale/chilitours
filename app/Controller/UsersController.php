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

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add');
	}

	//login method
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->setFlash(
						('Prijava uspješna'), 'alert', array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
						)
				);
				return $this->redirect(array(
							'controller' => 'users',
							'action' => 'index'
				));
			} else {
				$this->Session->setFlash('Username or password is incorrect', 'default', array(), 'auth');
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
				$this->Session->setFlash(
						('Novi korisnik dodan'), 'alert', array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
						)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
				$this->Session->setFlash(
						('Izmjena uspješna'), 'alert', array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
						)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function admin_home(){
				
	}

}
