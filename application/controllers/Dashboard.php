<?php

class Dashboard extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->not_logged_in();


        $this->data['page_title'] = 'Dashboard';
        
        $this->load->model('model_products');
        $this->load->model('model_orders');
        $this->load->model('model_users');
        $this->load->model('model_stores');
    }

    public function index()
    {
        $this->data['total_paid_orders'] = $this->model_orders->countTotalPaidOrders();
        $this->data['total_paid_orders2day'] = $this->model_orders->countTotalPaidOrders2day();
        $this->data['total_unpaid_orders'] = $this->model_orders->countTotalunPaidOrders();
        $this->data['total_day_orders'] = $this->model_orders->countTotalDayOrders();
        $this->data['total_unpaid_orders2day'] = $this->model_orders->countTotalunPaidOrders2day();
        $this->data['total_price']= $this->model_orders->totalprice()['sm'];
        $this->data['total_pricepay']= $this->model_orders->totalpricepay()['sm'];
        $this->data['total_priceunpay']= $this->data['total_price']-$this->data['total_pricepay'];

        $this->data['total_price2day']= $this->model_orders->totalprice2day()['sm'];
        $this->data['total_pricepay2day']= $this->model_orders->totalpricepay2day()['sm'];
        $this->data['total_priceunpay2day']= $this->data['total_price2day']-$this->data['total_pricepay2day'];

        $this->data['total_products'] = $this->model_products->countTotalProducts();
        $this->data['total_users'] = $this->model_users->countTotalUsers();
        $this->data['total_stores'] = $this->model_stores->countTotalStores();

        $user_id = $this->session->userdata('id');
        $is_admin = ($user_id == 1) ? true :false;

        $this->data['is_admin'] = $is_admin;
        $this->render_template('dashboard', $this->data);
    }
}
