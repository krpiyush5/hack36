<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('home');
    }

    public function newBusiness()
    {
        $this->load->view('register');
    }

    public function registerBusiness(){
        $data['NAME'] = $this->input->post('name', TRUE);
        $data['CONTACT'] = $this->input->post('phone', TRUE);
        $data['PROFESSION'] = $this->input->post('pro', TRUE);
        $data['EMAIL'] = $this->input->post('email', TRUE);
        $data['STREET'] = $this->input->post('street', TRUE);
        $data['CITY'] = $this->input->post('city', TRUE);
        $submit=$this->input->post('new',TRUE);
        if($submit=='SUBMIT')
        {
            $this->_insert($data);
        }
    }

    public function findServiceProvider(){
//        show map with user's location ... See if there's any requirement for calling another function
//        One possible way is via extracting data from database and show every database on map
//        other being via script for lats and longs...
    }


}