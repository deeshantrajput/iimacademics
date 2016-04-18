<?php

class home_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function form_insert($data) {
        $this->db->insert('message', $data);
    }

    function form_insert_review($data) {
        $this->db->insert('reviews', $data);
    }

    function form_insert_rating($data) {
        $this->db->insert('ratings', $data);
    }

    public function Search1($location, $college, $course,$sort_by,$sort_order) {
        $this->db->order_by($sort_by,$sort_order);
        $query = $this->db->get_where('colleges', array('location' => $location, 'name' => $college, 'course' => $course));
        return $query->result_array();
    }

    public function Search2($location, $college,$sort_by,$sort_order) {
        $this->db->order_by($sort_by,$sort_order);
        $query = $this->db->get_where('colleges', array('location' => $location, 'name' => $college));
        return $query->result_array();
    }

    public function Search3($location, $course,$sort_by,$sort_order) {
        $this->db->order_by($sort_by,$sort_order);
        $query = $this->db->get_where('colleges', array('location' => $location, 'course' => $course));
        return $query->result_array();
    }

    public function Search4($college, $course,$sort_by,$sort_order) {
        $this->db->order_by($sort_by,$sort_order);
        $query = $this->db->get_where('colleges', array('name' => $college, 'course' => $course));
        return $query->result_array();
    }

    public function Search5($location,$sort_by,$sort_order) {
        $this->db->order_by($sort_by,$sort_order);
        $query = $this->db->get_where('colleges', array('location' => $location));
        return $query->result_array();
    }

    public function Search6($college,$sort_by,$sort_order) {
        $this->db->order_by($sort_by,$sort_order);
        $query = $this->db->get_where('colleges', array('name' => $college));
        return $query->result_array();
    }

    public function Search7($course,$sort_by,$sort_order) {
        $this->db->order_by($sort_by,$sort_order);
        $query = $this->db->get_where('colleges', array('course' => $course));
        return $query->result_array();
    }

    public function getSearch($sort_by,$sort_order) {
        $this->db->order_by($sort_by,$sort_order);
         $query = $this->db->get('colleges');
        return $query->result_array();  
    }
    public function getEng() {
         $query = $this->db->get('engineering');
        return $query->result_array();  
    }
    public function getMba() {
         $query = $this->db->get('management');
        return $query->result_array();  
    }
    public function getUniv() {
         $query = $this->db->get('universities');
        return $query->result_array();  
    }
    
    public function featured() {
        $query = $this->db->get('college');
        return $query->result_array();
    }

    function autosearch($name) {
        $this->db->like('name', $name, 'both');
        $this->db->group_by('name');
        return $this->db->get('colleges')->result();
    }
    
    function autosearchloc($location) {
        $this->db->like('location', $location, 'both');
        $this->db->group_by('location');
        return $this->db->get('colleges')->result();
    }
    
    function autosearchcourse($course) {
        $this->db->like('course', $course, 'both');
        $this->db->group_by('course');
        return $this->db->get('colleges')->result();
    }

}
