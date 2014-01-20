<?php

App::uses('AppController', 'Controller');

/**
 * Accomodations Controller
 *
 * @property Accomodation $Accomodation
 * @property PaginatorComponent $Paginator
 */
class AccomodationsController extends AppController {

    public function index() {
        $this->layout = 'admin';
        $this->paginate = array(
            'limit' => 10,
            'order' => 'Accomodation.created DESC',
        );
        $this->set('accomodations', $this->paginate());
    }

    public $components = array('Paginator');

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Accomodation->id = $id;
        if (!$this->Accomodation->exists()) {
            throw new NotFoundException(__('Invalid %s', __('accomodation')));
        }
        $this->set('accomodation', $this->Accomodation->read(null, $id));
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
            //$this->Travel->createWithAttachments($this->request->data);
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
		$categories = $this->Accomodation->Location->find('list');
		$this->set(compact('locations'));
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
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Accomodation->id = $id;
        if (!$this->Accomodation->exists()) {
            throw new NotFoundException(__('Invalid %s', __('accomodation')));
        }
        if ($this->Accomodation->delete()) {
            $this->Session->setFlash(
                    __('The %s deleted', __('accomodation')), 'alert', array(
                'plugin' => 'TwitterBootstrap',
                'class' => 'alert-success'
                    )
            );
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(
                __('The %s was not deleted', __('accomodation')), 'alert', array(
            'plugin' => 'TwitterBootstrap',
            'class' => 'alert-error'
                )
        );
        $this->redirect(array('action' => 'index'));
    }

}
