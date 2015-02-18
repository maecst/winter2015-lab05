<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin extends Application {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->data['pagebody'] = 'admin_list';
        $this->data['title'] = 'Quotations Maintenance';
        $this->data['quotes'] = $this->quotes->all();
        $this->render();
    }
}

/* End of file Admin.php */
/* Location: application/controllers/Admin.php */