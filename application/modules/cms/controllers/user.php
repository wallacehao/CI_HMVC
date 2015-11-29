<?php 
    class User extends AdminController {
        protected $_data;
        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
        }
        public function index() {
            $this->_data['module']   = $this->uri->segment(1);
            $this->_data['title']    = 'index';
            $this->_data['loadpage'] = 'user/index_view';
            $this->load->view('cms/template.php',$this->_data);
        }
    }
?>