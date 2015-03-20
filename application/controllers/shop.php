<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends MY_Controller {

    public function __construct() {
        parent::__construct();
            $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('shop_model');
    }

    public function index() {
        
        $this->data['view_file'] = 'dashboard/index';

        $this->load->view('_layouts/main', $this->data);
    }

    public function create() {
        
        $this->data['view_file'] = 'shop/create';

        $this->load->view('_layouts/main', $this->data);
    }



    public function fileupload() {
        
               $file_path = FCPATH . 'uploads/';
            
            $length = 10;

            $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

 
         
            $config['upload_path'] = $file_path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['remove_spaces'] = 'TRUE';
            $config['file_name'] = $randomString . '.jpg';
            $config['overwrite'] = 'TRUE';

            $this -> load -> library('upload', $config);
            $this->upload->initialize($config);

            foreach ($_FILES as $k => $f) :
                $this -> upload -> do_upload($k);
            endforeach;
            echo json_encode(array('name'=>$randomString. '.jpg'));

    }

 
    function save()
    {           
        $this->form_validation->set_rules('shop_name', 'Shop Name', 'required|trim|xss_clean');          
        $this->form_validation->set_rules('shop_uploaded_image', 'Shop Image', 'required|trim|xss_clean');          
        $this->form_validation->set_rules('shop_address_line_1', 'Shop Address Line 1', 'required|trim|xss_clean');         
        $this->form_validation->set_rules('shop_address_line_2', 'Shop Address Line 2', 'required|trim|xss_clean');         
        $this->form_validation->set_rules('shop_city', 'Shop City', 'required|trim|xss_clean');         
        $this->form_validation->set_rules('shop_state', 'Shop State', 'required|trim|xss_clean');           
        $this->form_validation->set_rules('shop_zip_code', 'Shop Zip Code', 'required|trim|xss_clean');         
        $this->form_validation->set_rules('shop_email', 'Shop Email', 'required|trim|xss_clean|valid_email');           
        $this->form_validation->set_rules('shop_phone', 'Shop Phone', 'required|trim|xss_clean');           
        $this->form_validation->set_rules('shop_designation', 'Shop Designation', 'required|trim|xss_clean');
            
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
    
        if ($this->form_validation->run() == FALSE) // validation hasn't been passed
        {
        $this->data['view_file'] = 'shop/create';

        $this->load->view('_layouts/main', $this->data);
        }
        else // passed validation proceed to post success logic
        {
            // build array for the model
            
            $form_data = array(
                            'shop_name' => set_value('shop_name'),
                            'shop_image' => set_value('shop_uploaded_image'),
                            'shop_address_line_1' => set_value('shop_address_line_1'),
                            'shop_address_line_2' => set_value('shop_address_line_2'),
                            'shop_city' => set_value('shop_city'),
                            'shop_state' => set_value('shop_state'),
                            'shop_zip_code' => set_value('shop_zip_code'),
                            'shop_email' => set_value('shop_email'),
                            'shop_phone' => set_value('shop_phone'),
                            'shop_designation' => set_value('shop_designation')
                        );
                    
            // run insert model to write data to db
        
            if ($this->shop_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
            {
            
            $messages=array(
                'content'=>'Success, Shop Saved successfully!!!',                
                'type'=>'success',
                );      
 
            $this->session->set_userdata($messages);
            redirect('shop/create', 'refresh');

            }
            else
            {
            echo 'An error occurred saving your information. Please try again later';
            // Or whatever error handling is necessary
            }
        }
    }
 
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */