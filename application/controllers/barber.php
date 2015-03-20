<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Barber extends MY_Controller {

    public function __construct() {
        parent::__construct();
                $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('barber_model');
        $this->load->model('shop_model');
        $this->load->model('style_model');

    }


    public function index() {
        
        $this->data['view_file'] = 'dashboard/index';

        $this->load->view('_layouts/main', $this->data);
    }

    public function create() {
        
        $this->data['view_file'] = 'barber/create-step-1';

        $this->load->view('_layouts/main', $this->data);
    }


    public function createstep2() {
        $this->data['shops'] = $this->barber_model->get_shops();
        $this->data['view_file'] = 'barber/create-step-2';

        $this->load->view('_layouts/main', $this->data);
    }


    public function createstep3() {
        $this->data['styles'] = $this->barber_model->get_styles();
        
        $this->data['view_file'] = 'barber/create-step-3';

        $this->load->view('_layouts/main', $this->data);
    }




   
    function save()
    {           
        $this->form_validation->set_rules('barber_name', 'Barber Name', 'required|trim|xss_clean|max_length[255]');         
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim|xss_clean|max_length[255]');           
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|xss_clean|max_length[255]');         
        $this->form_validation->set_rules('barber_uploaded_image', 'Barber Image', 'required|trim|xss_clean');         
        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email|max_length[255]');         
        $this->form_validation->set_rules('primary_preference', 'Primary Preference', 'required|trim|xss_clean|max_length[255]');           
        $this->form_validation->set_rules('secondary_preference', 'Secondary Preference', 'required|trim|xss_clean|max_length[255]');           
        // $this->form_validation->set_rules('shop_id', 'Shop ID', 'required|trim|xss_clean|max_length[255]');
            
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
    
        if ($this->form_validation->run() == FALSE) // validation hasn't been passed
        {
        $this->data['view_file'] = 'barber/create-step-1';
        $this->load->view('_layouts/main', $this->data);
        }
        else // passed validation proceed to post success logic
        {
            // build array for the model
            
            $form_data = array(
                            'barber_name' => set_value('barber_name'),
                            'gender' => set_value('gender'),
                            'phone' => set_value('phone'),
                            'email' => set_value('email'),
                            'barber_image' => set_value('barber_uploaded_image'),
                            'primary_preference' => set_value('primary_preference'),
                            'secondary_preference' => set_value('secondary_preference'),
                            'shop_id' => set_value('shop_id')
                        );
                    
            // run insert model to write data to db
        
            if ($this->barber_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
            {
                 $messages=array(
                'content'=>'Success, Barber Created successfully!!!',                
                'type'=>'success',
                );      
 
            $this->session->set_userdata($messages);
            redirect('barber/createstep2', 'refresh');
            // $this->data['view_file'] = 'barber/create-step-2';
            // $this->load->view('_layouts/main', $this->data);

            }
            else
            {
            echo 'An error occurred saving your information. Please try again later';
            // Or whatever error handling is necessary
            }
        }
    }



    function shop_save()
    {           
        $this->form_validation->set_rules('shop_name', 'Shop Name', 'required|trim|xss_clean');          
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
        $this->data['view_file'] = 'barber/create-step-2';

        $this->load->view('_layouts/main', $this->data);
        }
        else // passed validation proceed to post success logic
        {
            // build array for the model
            
            $form_data = array(
                            'shop_name' => set_value('shop_name'),
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
            redirect('barber/createstep3', 'refresh');

            }
            else
            {
            echo 'An error occurred saving your information. Please try again later';
            // Or whatever error handling is necessary
            }
        }
    }



    function style_save()
    {           
           
        $this->form_validation->set_rules('style_name', 'Style Name', 'required|trim|xss_clean');          
        $this->form_validation->set_rules('style_uploaded_image', 'Style Image', 'required|trim|xss_clean');          
        $this->form_validation->set_rules('style_price', 'Style Price', 'required|trim|xss_clean');         
 
            
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
    
        if ($this->form_validation->run() == FALSE) // validation hasn't been passed
        {
        $this->data['view_file'] = 'barber/create-step-2';

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
            redirect('barber/createstep3', 'refresh');

            }
            else
            {
            echo 'An error occurred saving your information. Please try again later';
            // Or whatever error handling is necessary
            }
        }
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


    function success()
    {
            echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
            sessions have not been used and would need to be added in to suit your app';
    }
}
?>