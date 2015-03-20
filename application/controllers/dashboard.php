<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('dashboard_model');
        $this->load->library('pagination');
    }

    public function index() {
        
    
        $this->data['shops'] = $this->dashboard_model->get_shops();
        $this->data['barbers'] = $this->dashboard_model->get_barber();
        $this->data['styles'] = $this->dashboard_model->get_styles();
        $this->data['appointments'] = $this->dashboard_model->get_appointments();
	    $this->data['view_file'] = 'dashboard/index';

        $this->load->view('_layouts/main', $this->data);

    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */