<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Activity extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
        $this->data['view_file'] = 'dashboard/index';

        $this->load->view('_layouts/main', $this->data);
    }

    public function recent() {
        
        $this->data['view_file'] = 'activity/recent';

        $this->load->view('_layouts/main', $this->data);
    }

        public function appointments() {
        
        $this->data['view_file'] = 'activity/appointments';

        $this->load->view('_layouts/main', $this->data);
    }


            public function my_appointments() {
        
        $this->data['view_file'] = 'activity/my-appointments';

        $this->load->view('_layouts/main', $this->data);
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */