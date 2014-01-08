<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class ContactsController extends AppController {

    public function contact() {
        if ($this->request->is('post')) {
            $subject = 'Kontakt Forma';
            $this->sendMail($subject);
            $this->Session->setFlash('Poruka poslana', 'success');
            return $this->redirect(array('controller' => 'travels', 'action' => 'home'));
        }
    }

    public function reservation() {
        if ($this->request->is('post')) {
            $subject = 'Rezervacija Putovanja';
            $this->sendMail($subject);
            $this->Session->setFlash('Upit poslan', 'success');
            return $this->redirect(array('controller' => 'travels', 'action' => 'home'));
        }
    }

    public function travelcreate() {
        if ($this->request->is('post')) {
            $subject = 'Kreirano Putovanje';
            $this->sendMail($subject);
            $this->Session->setFlash('Upit poslan', 'success');
            return $this->redirect(array('controller' => 'travels', 'action' => 'home'));
        }
    }

    public function sendMail($subject) {
        $this->autoRender = false;
        $Email = new CakeEmail('default');
        $Email->template('email')
                ->viewVars(array('data' => $this->request->data))
                ->emailFormat('html')
                ->to('chilitou@chilitours.hr')
                ->subject($subject)
                ->send();
                
    }

}
