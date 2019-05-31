<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	function __construct()
    {
        parent::__construct();
        $this->load->model(array('Barang_model','Info_barang_level_model'));
        // $this->load->library('form_validation');
    }
	public function index() {
		$q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang/index.html';
            $config['first_url'] = base_url() . 'barang/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        if($this->session->userdata('role')=="anggota"){
            $config['total_rows'] = $this->Barang_model->total_rows($q,$level);
            $barang = $this->Barang_model->get_limit_data($config['per_page'], $start, $q,$level);   
        } else {
            $config['total_rows'] = $this->Barang_model->total_rows($q);
            $barang = $this->Barang_model->get_limit_data($config['per_page'], $start, $q);
        }
        

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_data' => $barang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template_front->display('barang/home', $data);
    }    
}
