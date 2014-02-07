<?php

App::uses('AppController', 'Controller');

/**
 * Accomodations Controller
 *
 * @property Accomodation $Accomodation
 * @property PaginatorComponent $Paginator
 */
class AccomodationsController extends AppController {

    public function beforeFilter() {
        $this->Auth->allow('view', 'home');
    }

    public function index() {
        $this->layout = 'admin';
        $this->paginate = array(
            'limit' => 10,
            'order' => 'Accomodation.created DESC',
        );
        $this->set('accomodations', $this->paginate());
    }

    public function home() {
        $this->paginate = array(
            'limit' => 10,
            'order' => 'Accomodation.created DESC',
        );
        $this->set('accomodations', $this->paginate());

        $options = array(
            'contain' => array('Accomodation'),
            'order' => 'Location.title ASC'
        );
        $accomodations = $this->Accomodation->Location->find('all', $options);
        $this->set('accomodations', $accomodations);
    }

    public $components = array('Paginator');

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Accomodation->exists($id)) {
            throw new NotFoundException(__('Invalid travel'));
        }
        $options = array(
            'contain' => array('Location', 'Image' => array('order' => 'Image.headphoto DESC')),
            'conditions' => array('Accomodation.' . $this->Accomodation->primaryKey => $id));
        $this->set('accomodation', $this->Accomodation->find('first', $options));
        $accomodation = $this->Accomodation->find('first', $options);

        $location = $accomodation['Accomodation']['location_id'];
        $options = array(
            'conditions' => array('Accomodation.location_id' => $location));
        $related = $this->Accomodation->find('all', $options);
        $this->set('related', $related);
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout = 'admin';

        $locations = $this->Accomodation->Location->find('list');
        $this->set(compact('locations'));

        if ($this->request->is('post')) {
            if ($this->Accomodation->createWithAttachments($this->request->data)) {
                $this->Session->setFlash('Novi smještaj kreiran', 'success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Neuspješan unos smještaja', 'alert');
            }
        }
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->layout = 'admin';

        if (!$this->Accomodation->exists($id)) {
            throw new NotFoundException(__('Invalid accomodation'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Accomodation->createWithAttachments($this->request->data)) {
                $this->Session->setFlash('Smještaj izmijenjen', 'success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Neuspješno uređivanje smještaja', 'alert');
            }
        } else {
            $options = array('conditions' => array('Accomodation.' . $this->Accomodation->primaryKey => $id));
            $this->request->data = $this->Accomodation->find('first', $options);
        }
        $locations = $this->Accomodation->Location->find('list');
        $this->set('locations', $locations);
        $this->set('id', $id);

        $options = array(
            'conditions' => array(
                'foreign_key' => $id));

        $images = $this->Accomodation->Image->find('all', $options);
        $this->set('images', $images);
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Accomodation->id = $id;
        if (!$this->Accomodation->exists()) {
            throw new NotFoundException(__('Invalid travel'));
        }
        if ($this->Accomodation->delete()) {
            $this->Session->setFlash('Smještaj uklonjen', 'info');
        } else {
            $this->Session->setFlash('Neuspješno brisanje smještaja', 'alert');
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function imageDelete($id) {
        $this->autoRender = false;
        $this->Accomodation->Image->id = $id;
        if (!$this->Accomodation->Image->exists()) {
            throw new NotFoundException(__('Invalid image'));
        }
        if ($this->Accomodation->Image->delete()) {
            $this->Session->setFlash('Slika uklonjena', 'info');
        } else {
            $this->Session->setFlash('Neuspješno brisanje slike', 'alert');
        }
    }

}
