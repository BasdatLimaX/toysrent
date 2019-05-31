<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Barang_model','Info_barang_level_model'));
        $this->load->library('form_validation');
    }

    public function index()
    {
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
        $config['total_rows'] = $this->Barang_model->total_rows($q);
        $barang = $this->Barang_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_data' => $barang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template_front->display('barang/barang_list', $data);
    }

<<<<<<< HEAD
=======
    public function home()
    {
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

>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
    public function read($id) 
    {
        $row = $this->Barang_model->get_by_id($id);
        $review = $this->Barang_model->get_review($id);
        $info = $this->Info_barang_level_model->get_by_barang($id);
        if ($row) {
            $data = array(
		'id_barang' => $row->id_barang,
		'nama_item' => $row->nama_item,
		'warna' => $row->warna,
		'url_foto' => $row->url_foto,
		'kondisi' => $row->kondisi,
		'lama_penggunaan' => $row->lama_penggunaan,
		'nama_penyewa' => $row->nama_lengkap,
        'info' => $info,
        'review' => $review,
	    );
            $this->template_front->display('barang/barang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang/create_action'),
	    'id_barang' => set_value('id_barang'),
	    'nama_item' => set_value('nama_item'),
	    'warna' => set_value('warna'),
	    'url_foto' => set_value('url_foto'),
	    'kondisi' => set_value('kondisi'),
	    'lama_penggunaan' => set_value('lama_penggunaan'),
	    'no_ktp_penyewa' => set_value('no_ktp_penyewa'),
	);
        $this->load->view('barang/barang_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_item' => $this->input->post('nama_item',TRUE),
		'warna' => $this->input->post('warna',TRUE),
		'url_foto' => $this->input->post('url_foto',TRUE),
		'kondisi' => $this->input->post('kondisi',TRUE),
		'lama_penggunaan' => $this->input->post('lama_penggunaan',TRUE),
		'no_ktp_penyewa' => $this->input->post('no_ktp_penyewa',TRUE),
	    );

            $this->Barang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang/update_action'),
		'id_barang' => set_value('id_barang', $row->id_barang),
		'nama_item' => set_value('nama_item', $row->nama_item),
		'warna' => set_value('warna', $row->warna),
		'url_foto' => set_value('url_foto', $row->url_foto),
		'kondisi' => set_value('kondisi', $row->kondisi),
		'lama_penggunaan' => set_value('lama_penggunaan', $row->lama_penggunaan),
		'no_ktp_penyewa' => set_value('no_ktp_penyewa', $row->no_ktp_penyewa),
	    );
            $this->load->view('barang/barang_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_barang', TRUE));
        } else {
            $data = array(
		'nama_item' => $this->input->post('nama_item',TRUE),
		'warna' => $this->input->post('warna',TRUE),
		'url_foto' => $this->input->post('url_foto',TRUE),
		'kondisi' => $this->input->post('kondisi',TRUE),
		'lama_penggunaan' => $this->input->post('lama_penggunaan',TRUE),
		'no_ktp_penyewa' => $this->input->post('no_ktp_penyewa',TRUE),
	    );

            $this->Barang_model->update($this->input->post('id_barang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $this->Barang_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

<<<<<<< HEAD
=======
    public function add_cart($id) 
    {

        if($this->session->userdata('login_id')=='' || $this->session->userdata('login_id')==NULL) {
            redirect(site_url('auth')); 
        } else {
            echo $id;
        }
    }

>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
    public function _rules() 
    {
	$this->form_validation->set_rules('nama_item', 'nama item', 'trim|required');
	$this->form_validation->set_rules('warna', 'warna', 'trim|required');
	$this->form_validation->set_rules('url_foto', 'url foto', 'trim|required');
	$this->form_validation->set_rules('kondisi', 'kondisi', 'trim|required');
	$this->form_validation->set_rules('lama_penggunaan', 'lama penggunaan', 'trim|required');
	$this->form_validation->set_rules('no_ktp_penyewa', 'no ktp penyewa', 'trim|required');

	$this->form_validation->set_rules('id_barang', 'id_barang', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:08 */
/* http://harviacode.com */