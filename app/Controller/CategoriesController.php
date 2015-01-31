<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CategoriesController extends AppController {
 
    var $name = 'Categories';
 
    function index() {
        $this->set('categories', $this->Category->find('all'));
    }
    public function view($id = null) {
        $post = $this->Post->findById($id);
        $this->set('post', $post);
    }
    function add() {
        if (!empty($this->data)) {
            if ($this->Category->save($this->data)) {
                $this->Session->setFlash('Your category has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
}
?>