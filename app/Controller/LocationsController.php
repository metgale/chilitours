<?php

App::uses('AppController', 'Controller');

/**
 * Locations Controller
 *
 * @property Location $Location
 * @property PaginatorComponent $Paginator
 */
class LocationsController extends AppController {

    public function index() {
        $this->layout = 'admin';
        $this->paginate = array(
            'limit' => 10
        );
        $this->set('locations', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Location->id = $id;
        if (!$this->Location->exists()) {
            throw new NotFoundException(__('Invalid %s', __('location')));
        }
        $this->set('location', $this->Location->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout = 'admin';
        if ($this->request->is('post')) {
            $this->Location->create();
            if ($this->Location->save($this->request->data)) {
                $this->Session->setFlash(
                        __('The %s has been saved', __('location')), 'alert', array(
                    'plugin' => 'TwitterBootstrap',
                    'class' => 'alert-success'
                        )
                );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(
                        __('The %s could not be saved. Please, try again.', __('location')), 'alert', array(
                    'plugin' => 'TwitterBootstrap',
                    'class' => 'alert-error'
                        )
                );
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
        if (!$this->Location->exists($id)) {
            throw new NotFoundException(__('Invalid location'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Location->save($this->request->data)) {
                $this->Session->setFlash('Lokacija izmijenjena', 'success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Neuspješno uređivanje lokacije', 'alert');
            }
        } else {
            $options = array('conditions' => array('Location.' . $this->Location->primaryKey => $id));
            $this->request->data = $this->Location->find('first', $options);
        }
        $this->set('id', $id);
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Location->id = $id;
        if (!$this->Location->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->Location->delete()) {
            $this->Session->setFlash('Lokacija uklonjena', 'info');
        } else {
            $this->Session->setFlash('Neuspješno brisanje lokacije', 'alert');
        }
        return $this->redirect(array('action' => 'index'));
    }

}
