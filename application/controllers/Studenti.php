<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studenti extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        //$this->load->view('welcome_message');


        $data['title']='Zoznam Studentov';
        $this->load->model('model')  ;

        $data1 ['studenti1']=  $this->model->select_all_stud('Student');

        $this->load->view('template/header',$data)  ;
        $this->load->view('template/navigation');
        $this->load->view('studenti_w',$data1);
        $this->load->view('template/footer');
        //  $this->load->view('about');
    }
}
?>