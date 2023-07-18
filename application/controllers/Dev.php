<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Dev extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model("database");
        $this->load->model("influx");
    }

    public function index_get()
    {
        $hasil = $this->database->test();
        $this->response($hasil, 200);
    }

}