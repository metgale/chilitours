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

		$this->paginate = array(
			'limit' => 10,
			'order' => 'Travel.created DESC',
		);
		$this->set('travels', $this->paginate());
	}

	public function home($id = null) {
		if (!empty($id)) {
			$this->paginate = array(
				'contain' => array('Image' => array('conditions' => array('Image.headphoto' => 1)), 'Term' => array('limit' => 1, 'order' => 'Term.price ASC')),
				'limit' => 9,
				'conditions' => array('Travel.published' => 1, 'Travel.category_id' => $id),
				'order' => 'Travel.created DESC',
			);
		} else {
			$this->paginate = array(
				'contain' => array('Image' => array('conditions' => array('Image.headphoto' => 1)), 'Term' => array('limit' => 1, 'order' => 'Term.price ASC')),
				'limit' => 9,
				'conditions' => array('Travel.published' => 1),
				'order' => 'Travel.created DESC');
		}
		$this->set('travels', $this->paginate());
		$categories = $this->Travel->Category->find('all');
		$this->set('categories', $categories);

		$featured = $this->Travel->find('all', array(
			'conditions' => array('Travel.featured' => 1, 'Travel.published' => 1),
			'contain' => array('Image' => array('conditions' => array('Image.headphoto' => 1))),
			'order' => 'Travel.created DESC'));
		$this->set('featuredtravels', $featured);		
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->Travel->exists($id)) {
			throw new NotFoundException(__('Invalid travel'));
		}
		$options = array(
			'contain' => array('Category', 'Term', 'Image' => array('order' => 'Image.headphoto DESC')),
			'conditions' => array('Travel.' . $this->Travel->primaryKey => $id));
		$this->set('travel', $this->Travel->find('first', $options));
		$travel = $this->Travel->find('first', $options);

		$category = $travel['Travel']['category_id'];
		$options = array(
			'conditions' => array('Travel.category_id' => $category));
		$related = $this->Travel->find('all', $options);
		$this->set('related', $related);

		$this->loadModel('Blog');
		$this->set('blogs', $this->Blog->find('list'));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		$this->layout = 'admin';

		$categories = $this->Travel->Category->find('list');
		$this->set(compact('categories'));

		if ($this->request->is('post')) {
			//$this->Travel->createWithAttachments($this->request->data);
			if ($this->Travel->createWithAttachments($this->request->data)) {
				$this->Session->setFlash('Putovanje kreirano', 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Neuspješan unos putovanja', 'alert');
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

		if (!$this->Travel->exists($id)) {
			throw new NotFoundException(__('Invalid travel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Travel->createWithAttachments($this->request->data)) {
				$this->Session->setFlash('Putovanje izmijenjeno', 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Neuspješno uređivanje putovanja', 'alert');
			}
		} else {
			$options = array('conditions' => array('Travel.' . $this->Travel->primaryKey => $id));
			$this->request->data = $this->Travel->find('first', $options);
		}
		$categories = $this->Travel->Category->find('list');
		$this->set(compact('categories'));
		$this->set('id', $id);

		$options = array(
			'conditions' => array(
				'foreign_key' => $id));

		$images = $this->Travel->Image->find('all', $options);
		$this->set('images', $images);
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
		if ($this->Travel->delete()) {
			$this->Session->setFlash('Putovanje uklonjeno', 'info');
		} else {
			$this->Session->setFlash('Neuspješno brisanje putovanja', 'alert');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function imageDelete($id) {
		$this->autoRender = false;
		$this->Travel->Image->id = $id;
		if (!$this->Travel->Image->exists()) {
			throw new NotFoundException(__('Invalid image'));
		}
		if ($this->Travel->Image->delete()) {
			$this->Session->setFlash('Slika uklonjena', 'info');
		} else {
			$this->Session->setFlash('Neuspješno brisanje slike', 'alert');
		}
	}
}
