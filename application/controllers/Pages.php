<?php
class Pages extends CI_Controller {
    
    
    public function view() {
        
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
    public function aboutus() {
        $this->load->view('pages/navbar');
        $this->load->view('pages/about');
        $this->load->view('templates/footer');
    }
    public function services() {
        $this->load->view('pages/navbar');
        $this->load->view('pages/services');
        $this->load->view('templates/footer');
    }
    public function projects() {
        $this->load->view('pages/navbar');
        $this->load->view('pages/projects');
        $this->load->view('templates/footer');
    }
    public function contacts() {
        $this->load->view('pages/navbar');
        $this->load->view('pages/contacts');
        $this->load->view('templates/footer');
    }
    function __construct() {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->helper('url_helper');
    }
    public function data_submitted() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'purpose' => $this->input->post('purpose'),
            'message' => $this->input->post('comments')
        );
        $this->home_model->form_insert($data);
    }
    public function contactus() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('purpose', 'Purpose', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/navbar');
            $this->load->view('pages/contacts');
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $purpose = $this->input->post('purpose');
            $message = $this->input->post('message');
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'purpose' => $this->input->post('purpose'),
                'message' => $this->input->post('message')    
            );
            $this->home_model->form_insert($data);
            $config['mailtype'] = 'html';
            $this->load->library('email', $config);
            $this->email->from($this->input->post('email'), $this->input->post('name'));
            $this->email->to('deeshantrajput@gmail.com');
            $this->email->subject('Customer Query');
            $msg = "";
            $msg.= "<table width='500' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; font-size:10pt; border:1px solid #ccc;'> ";
            $msg.= "<tr>";
            $msg.= "<td width='16' height='25'>&nbsp;</td>";
            $msg.= "<td width='96'>Name</td>";
            $msg.= "<td width='10' height='25'><strong>:</strong></td>";
            $msg.= "<td height='25'>$name</td>";
            $msg.= "</tr>";
            $msg.= "<tr>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>Email Id </td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>$email</td>";
            $msg.= "</tr>";
            $msg.= "<tr>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>Purpose </td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>";
            $msg.= "<td height='25' bgcolor='#F5F5F5'>$purpose</td>";
            $msg.= "</tr>";
            $msg.= "<tr>";
            $msg.= "<td height='95'>&nbsp;</td>";
            $msg.= "<td height='95'>Message</td>";
            $msg.= "<td height='95'><strong>:</strong></td>";
            $msg.= "<td height='95'>$message</td>";
            $msg.= "</tr>";
            $msg.= "</table>";
            $this->email->message($msg);
            if ($this->email->send()) {
                redirect(base_url() . 'Pages/thankyou');
            }
        }
    }
    public function thankyou() {
        $this->load->view('pages/navbar');
        $this->load->view('pages/thankyou');
        $this->load->view('templates/footer');
    }
    public function thankreview() {
        $this->load->view('pages/navbar');
        $this->load->view('pages/thankreview');
        $this->load->view('templates/footer');
    }
    public function getreviews($name) {
        $this->load->model('home_model');
        $name=str_replace("%20"," ",$name);
        $data['records'] = $this->home_model->getreviews($name);
            $this->load->view('pages/navbar');
            $this->load->view('pages/reviews', $data);
            $this->load->view('templates/footer');
    }
    
    public function collegesearch($sort_by='rating',$sort_order='desc') {
        $location = $this->input->post('location');
        $name = $this->input->post('name');
        $course = $this->input->post('course');
        
        if ((!empty($location)) && (!empty($name)) && (!empty($course))) {
            $this->load->model('home_model');
            $data['records'] = $this->home_model->Search1($location, $name, $course,$sort_by,$sort_order);
            $data['sort_order'] = $sort_order;
            $this->load->view('pages/navbar');
            $this->load->view('pages/collegesearch', $data);
            $this->load->view('templates/footer');
        } elseif ((!empty($location)) && (!empty($name)) && (empty($course))) {
            $this->load->model('home_model');
            $data['records'] = $this->home_model->Search2($location, $name,$sort_by,$sort_order);
            $data['sort_order'] = $sort_order;
            $this->load->view('pages/navbar');
            $this->load->view('pages/collegesearch', $data);
            $this->load->view('templates/footer');
        } elseif ((!empty($location)) && (empty($name)) && (!empty($course))) {
            $this->load->model('home_model');
            $data['records'] = $this->home_model->Search3($location, $course,$sort_by,$sort_order);
            $data['sort_order'] = $sort_order;
            $this->load->view('pages/navbar');
            $this->load->view('pages/collegesearch', $data);
            $this->load->view('templates/footer');
        } elseif ((empty($location)) && (!empty($name)) && (!empty($course))) {
            $this->load->model('home_model');
            $data['records'] = $this->home_model->Search4($name, $course,$sort_by,$sort_order);
            $data['sort_order'] = $sort_order;
            $this->load->view('pages/navbar');
            $this->load->view('pages/collegesearch', $data);
            $this->load->view('templates/footer');
        } elseif ((!empty($location)) && (empty($name)) && (empty($course))) {
            $this->load->model('home_model');
            $data['records'] = $this->home_model->Search5($location,$sort_by,$sort_order);
            $data['sort_order'] = $sort_order;
            $data['feature'] = $this->home_model->featured();
            $this->load->view('pages/navbar');
            $this->load->view('pages/collegesearch', $data);
            $this->load->view('templates/footer');
        } elseif ((empty($location)) && (!empty($name)) && (empty($course))) {
            $this->load->model('home_model');
            $data['records'] = $this->home_model->Search6($name,$sort_by,$sort_order);
            $data['sort_order'] = $sort_order;
            $data['feature'] = $this->home_model->featured();
            $this->load->view('pages/navbar');
            $this->load->view('pages/collegesearch', $data);
            $this->load->view('templates/footer');
        } elseif ((empty($location)) && (empty($name)) && (!empty($course))) {
            $this->load->model('home_model');
            $data['records'] = $this->home_model->Search7($course,$sort_by,$sort_order);
            $data['sort_order'] = $sort_order;
            $this->load->view('pages/navbar');
            $this->load->view('pages/collegesearch', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->model('home_model');
            $data['records'] = $this->home_model->getSearch($sort_by,$sort_order);
            $data['sort_order'] = $sort_order;
            $this->load->view('pages/navbar');
            $this->load->view('pages/collegesearch',$data);
            $this->load->view('templates/footer');
        }
    }
    public function review($name) {
        $data = array(
            'name' => urldecode($name),
            'review' => $this->input->post('review'),
            'rating' => $this->input->post('rating')
        );
        $this->home_model->form_insert_review($data);
        redirect(base_url() . 'Pages/thankreview');
    }
    public function rating() {
        $data = array(
            'name' => $this->input->post('name'),
            'rating' => $this->input->post('rating')
        );
        $this->home_model->form_insert_rating($data);
        redirect(base_url() . 'Pages/thankreview');
    }
    
    public function topeng() {
        $this->load->model('home_model');
            $data['records'] = $this->home_model->getEng();
            $this->load->view('pages/navbar');
            $this->load->view('pages/top',$data);
            $this->load->view('templates/footer');
    }
    public function topmba() {
        $this->load->model('home_model');
            $data['records'] = $this->home_model->getMba();
            $this->load->view('pages/navbar');
            $this->load->view('pages/top',$data);
            $this->load->view('templates/footer');
    }
    public function topuniv() {
        $this->load->model('home_model');
            $data['records'] = $this->home_model->getUniv();
            $this->load->view('pages/navbar');
            $this->load->view('pages/top',$data);
            $this->load->view('templates/footer');
    }
    public function autosearch() {
        if (isset($_GET['term'])) {
            $result = $this->home_model->autosearch($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $pr)
                    $arr_result[] = $pr->name;
                echo json_encode($arr_result);
            }
        }
    }
    
       public function autosearchloc() {
        if (isset($_GET['term'])) {
            $result = $this->home_model->autosearchloc($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $pr)
                    $arr_result[] = $pr->location;
                echo json_encode($arr_result);
            }
        }
    }
    
    public function autosearchcourse() {
        if (isset($_GET['term'])) {
            $result = $this->home_model->autosearchcourse($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $pr)
                    $arr_result[] = $pr->course;
                echo json_encode($arr_result);
            }
        }
    }
}