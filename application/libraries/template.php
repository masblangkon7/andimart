<?php
class Template{
    protected $_ci;
    
    function __construct(){
        $this->_ci = &get_instance();
    }
    
	function utama($content, $data = NULL){
		/*
		 * $data['headernya'] , $data['contentnya'] , $data['footernya']
		 * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
		 * */
        $data['contentnya'] = $this->_ci->load->view($content, $data, TRUE);
        $this->_ci->load->view('template/index', $data);
    }
}

