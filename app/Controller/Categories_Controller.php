<?php

/*Category controller
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categories_controller
 *
 * @author Rubiya_WD
 */

class CategoriesController extends AppController {
 
    var $name = 'Categories';
 
    function index() {
        $this->set('categories', $this->Category->find('all'));
    }
//     public function view($id = null) {
//        $post = $this->Post->findById($id);
//        $this->set('post', $post);
//    }
}
?>