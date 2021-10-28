<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report_money extends CI_Controller {

    public function index()
    {
        
    }

    public function show()
    {
        // var_dump($_POST);
        var_dump($this->input->post());
    }
}

/* End of file Report_money.php */
