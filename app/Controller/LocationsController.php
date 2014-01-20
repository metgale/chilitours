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
        $this->Location->id = $id;
        if (!$this->Location->exists()) {
            throw new NotFoundException(__('Invalid %s', __('location')));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
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
        } else {
            $this->request->data = $this->Location->read(null, $id);
        }
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Location->id = $id;
        if (!$this->Location->exists()) {
            throw new NotFoundException(__('Invalid %s', __('location')));
        }
        if ($this->Location->delete()) {
            $this->Session->setFlash(
                    __('The %s deleted', __('location')), 'alert', array(
                'plugin' => 'TwitterBootstrap',
                'class' => 'alert-success'
                    )
            );
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(
                __('The %s was not deleted', __('location')), 'alert', array(
            'plugin' => 'TwitterBootstrap',
            'class' => 'alert-error'
                )
        );
        $this->redirect(array('action' => 'index'));
    }

}
