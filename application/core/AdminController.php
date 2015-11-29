<?php
	require APPPATH."third_party/MX/Controller.php";
	class AdminController extends MX_Controller {
		protected $_data;
		public function __construct() {
			parent::__construct();
			$this->_data["module"] = $this->uri->segment(1);
			/*
			$module = $this->uri->segment(1);
			if ($this->session->userdata('level')!=2 && $this->uri->segment(2)!= 'verify') {
				redirect(base_url().$module.'/verify/login');
			}
			$this->_data['username_login'] = $this->session->userdata('username');
			$this->_data['module'] = $module;
			$this->_data['path'] = $module.'/template';
			$this->_data['search_bar']      = TRUE;
			$this->_data['image_edit']      = base_url().'public/'.$module.'/css/images/edit.png';
			$this->_data['image_delete']    = base_url().'public/'.$module.'/css/images/delete.png';
			$this->_data['image_success']   = base_url().'public/'.$module.'/css/images/valid.png';
			$this->_data['image_error']     = base_url().'public/'.$module.'/css/images/warning.png';
			*/
		}
	} 
?>