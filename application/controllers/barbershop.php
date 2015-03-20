<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Barbershop extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('inflector');
        // $this->load->model('barbershop_model');
        $this->form_validation->set_error_delimiters('<div style="color:#b94a48;" >', '</div>');
        $this->load->library('pagination');
    }

    public function index() {
        
        $this->data['view_file'] = 'dashboard/index';

        $this->load->view('_layouts/main', $this->data);
    }


    public function create() {
        
        $this->data['view_file'] = 'barbershop/create-step-1';

        $this->load->view('_layouts/main', $this->data);
    }

     function save()
    {
        if(!$this->logged()) { redirect('auth/login'); }
        $this->form_validation->set_rules('shop_name', 'Shop Name', 'required|trim|xss_clean|max_length[255]');			
		$this->form_validation->set_rules('shop_address_line_1', 'Shop Address Line 1', '');
		$this->form_validation->set_rules('shop_address_line_2', 'Shop Address Line 2', '');
		$this->form_validation->set_rules('shop_city', 'Shop City', '');

        if ($this->form_validation->run() == true) {
            if (isset($_POST["token"])) {
                // Kill the bots
                $links   = "";
                $options = array();
                $i       = 0;
                foreach ($_POST["option"] as $q) {
                    // echo var_dump($_POST["option"]);
                    if (isset($_POST["links"][$i])) {
                        $links = $_POST["links"][$i];
                    }
                    if (empty($q))
                        continue;
                    $options[$i] = array(
                        "answer" => $q,
                        "count" => 0,
                        'option_link' => $links
                    );
                    $i++;
                }
                // Check if at least one answer is set
                if ($_POST["questiontype"] == "options") {
                    $options = json_encode($options);
                } else {
                    $options = '{"1":{"total":0,"count":0}}';
                }
                // Generate custom info
                $custom = array(
                    "background" => $_POST["background"]
                );
                // Validate Post info
                $unique = $this->uniqid();
                if (isset($_POST["polltype"])) {
                    $polltype = $_POST["polltype"];
                } else {
                    $polltype = "";
                }
                if (isset($_POST["results"])) {
                    $results = $_POST["results"];
                } else {
                    $results = "";
                }
                if (isset($_POST["share"])) {
                    $share = $_POST["share"];
                } else {
                    $share = "";
                }
                if (isset($_POST["open"])) {
                    $open = $_POST["open"];
                } else {
                    $open = "on";
                }
                // Prepare data
                $data     = array(
                    "userid" => $this->userid(),
                    "question" => $_POST["question"],
                    "question_link" => $_POST["question_link"],
                    "options" => $options,
                    "custom" => json_encode($custom),
                    "created" => "NOW()",
                    "results" => $results,
                    "share" => $share,
                    "open" => $open,
                    "type" => $_POST["questiontype"],
                    "polltype" => $polltype,
                    "uniqueid" => $unique
                );
                // Prepare tags
                $get_tags = $_POST["tags"];
                $get_tags = explode(",", $get_tags);
                $tags     = $get_tags;
                $this->db->insert("qt_poll", $data, TRUE);
                $poll_id = $this->db->insert_id();
                // Insert to database
                if ($poll_id) {
                    foreach ($tags as $tag) {
                        $safe_tag = str_replace(" ", "_", $tag);
                        $query    = $this->db->query("select * from qt_tags where safe_tag = '" . $safe_tag . "'");
                        $query    = $query->result();
                        if ($query) {
                            $tag_id = $query[0]->id;
                        } else {
                            //
                            $create_tag = array(
                                "tag" => trim($tag),
                                "safe_tag" => $safe_tag
                            );
                            $this->db->insert("qt_tags", $create_tag, TRUE);
                            $tag_id = $this->db->insert_id();
                        }
                        $create_tag_ref = array(
                            "row_id" => trim($poll_id),
                            "tag_id" => $tag_id
                        );
                        $this->db->insert("qt_tags_ref", $create_tag_ref, TRUE);
                    }
                    // redirect("polls/show/" . $unique, 'refresh');
                    $this->session->set_flashdata('message', 'Poll Created Successfully' );
                    redirect("polls/edit/" . $poll_id, 'refresh');

                }
                return "An unexpected error occurred, please try again.";
            }
            // $this -> polls_model -> save_poll();
            $this->session->set_flashdata('message', 'Poll Created Successfully');
            redirect("polls", 'refresh');
        } else {
            //redirect them back to the login page
            // $this->session->set_flashdata('message', validation_errors());
            $data['main_content'] = 'polls/create';
            $this->load->view('includes/template_aside', $data);
            // redirect('polls/create', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
        }
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */