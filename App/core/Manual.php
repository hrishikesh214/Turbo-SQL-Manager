<?php 

class Manual extends CodeRunner{
	public function index(){
		$this->load->view('Manual/welcome');
	}
	public function install(){
		$this->load->view('Manual/installation');
	}
	public function guide(){
		$this->load->view('Manual/guide_view');
	}
}

 ?>