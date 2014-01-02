<?php

App::uses('AppController', 'Controller');

class ContactsController extends AppController {
    
    public function contact(){
        if($this->request->is('post')){
            debug($this->request);
            die;
        }
    }
}
