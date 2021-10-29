<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function index()
    {
        $this->load->view('v_manual', [
            'base_url' => base_url()
        ]);
    }
}

/* End of file Welcome.php */
