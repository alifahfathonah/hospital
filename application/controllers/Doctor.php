<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Doctor extends CI_Controller{
    public function __construct(){
      parent::__construct();
      date_default_timezone_set('Asia/Kolkata');
    }

   public function index(){    
    $this->load->view('Doctor/doc_header');
    $this->load->view('Doctor/index');
    $this->load->view('Doctor/doc_footer');
  }
}
?>
