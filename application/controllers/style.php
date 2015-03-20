<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Style extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('style_model');
    }

    public function index() {
        
        $this->data['view_file'] = 'dashboard/index';

        $this->load->view('_layouts/main', $this->data);
    }

    public function create() {
        
        $this->data['view_file'] = 'style/create';

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
        $this->form_validation->set_rules('style_name', 'Style Name', 'required|trim|xss_clean');          
        $this->form_validation->set_rules('style_uploaded_image', 'Style Image', 'required|trim|xss_clean');          
        $this->form_validation->set_rules('style_price', 'Style Price', 'required|trim|xss_clean');         
 
            
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
    
        if ($this->form_validation->run() == FALSE) // validation hasn't been passed
        {
        $this->data['view_file'] = 'style/create';

        $this->load->view('_layouts/main', $this->data);
        }
        else // passed validation proceed to post success logic
        {
            // build array for the model
            
            $form_data = array(
                            'style_name' => set_value('style_name'),
                            'style_image' => set_value('style_uploaded_image'),
                            'style_price' => set_value('style_price'),
                            
                        );
                    
            // run insert model to write data to db
        
            if ($this->style_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
            {
            
            $messages=array(
                'content'=>'Success, Style Saved successfully!!!',                
                'type'=>'success',
                );      
 
            $this->session->set_userdata($messages);
            redirect('style/create', 'refresh');

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