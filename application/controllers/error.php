<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
        
        public function page_not_found() {
            
            $this->load->view('404');
        }
}
