<?php

App::uses('AppController', 'Controller');

/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends AppController {

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
            'limit' => 10
        );
        $this->set('categories', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Category->exists($id)) {
            throw new NotFoundException(__('Invalid category'));
        }
        $options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
        $this->set('category', $this->Category->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout = 'admin';
        if ($this->request->is('post')) {
            $this->Category->create();
            if ($this->Category->save($this->request->data)) {
                $this->Session->setFlash('Kategorija kreirana', 'success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Neuspješan unos kategorije', 'alert');
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
        if (!$this->Category->exists($id)) {
            throw new NotFoundException(__('Invalid category'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Category->save($this->request->data)) {
                $this->Session->setFlash('Kategorija izmijenjena', 'success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Neuspješno uređivanje kategorije', 'alert');
            }
        } else {
            $options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
            $this->request->data = $this->Category->find('first', $options);
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
        $this->Category->id = $id;
        if (!$this->Category->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->Category->delete()) {
            $this->Session->setFlash('Kategorija uklonjena', 'info');
        } else {
            $this->Session->setFlash('Neuspješno brisanje kategorije', 'alert');
        }
        return $this->redirect(array('action' => 'index'));
    }

}
