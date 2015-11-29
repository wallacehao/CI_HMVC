<?php 
    class Dashboard extends AdminController{
        protected $_data;
        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $this->_data['module']   = $this->uri->segment(1);
            $this->_data['title']    = 'index';
            $this->_data['loadpage'] = 'dashboard';
            $this->load->view('cms/template.php',$this->_data);
        }

    }
?>