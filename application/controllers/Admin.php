<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin extends Application {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('formfields');
    }
    
    function index() {
        $this->data['pagebody'] = 'admin_list';
        $this->data['title'] = 'Quotations Maintenance';
        $this->data['quotes'] = $this->quotes->all();
        $this->render();
    }
    
    // add a new quotation
    function add() {
       $quote = $this->quotes->create();
       $this->present($quote);
    }
    
    // present a quotation for adding/editing function
    function present($quote) {
        $this->data['fid'] = makeTextField('ID#', 'id', $quote->id);
        $this->data['fwho'] = makeTextField('Author', 'who', $quote->who);
        $this->data['fmug'] = makeTextField('Picture', 'mug', $quote->mug);
        $this->data['fwhat'] = makeTextField('The Quote', 'what', $quote->what);
        $this->data['pagebody'] = 'quote_edit';
        
        $this->data['fsubmit'] = makeSubmitButton(
                'Process Quote', 
                "Click here to validate the quotation idea", 
                'btn-success');
        
        $this->render();
    }
}

/* End of file Admin.php */
/* Location: application/controllers/Admin.thphp */