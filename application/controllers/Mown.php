<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mown extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->not_logged_in();

        $this->data['page_title'] = 'mown';

        $this->load->model('model_orders');

        $this->currency_code = $this->company_currency();
    }
    public function index()
    {
        $this->data['page_title'] = 'Manage mown';
        $this->render_template('mown/index', $this->data);
    }
}
