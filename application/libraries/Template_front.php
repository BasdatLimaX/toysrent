<?php
class Template_front {
	protected $_ci;
	function __construct(){
	$this ->_ci=&get_instance();
	}
	function display($template_user,$data=null,$template_js=null,$js=null,$title=null){

	$data['_title']= ($title==null) ? 'Toys Rent Kelompok ......' : $title;
	$data['_header']=
	$this->_ci->load->view('template_front/header',$data,true);
	$data['_topbar']=
	$this->_ci->load->view('template_front/top',$data,true);
	$data['_content']=
	$this->_ci->load->view($template_user,$data,true);
	$data['_footer']=
	$this->_ci->load->view('template_front/footer',$data,true);
	$data['_js']=
	($template_js!=null) ? $this->_ci->load->view($template_js,$js,true) : '';
	
	$this->_ci->load->view('template.php',$data);
	}
}