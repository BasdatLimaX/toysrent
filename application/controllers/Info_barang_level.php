<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Info_barang_level extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Info_barang_level_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'info_barang_level/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'info_barang_level/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'info_barang_level/index.html';
            $config['first_url'] = base_url() . 'info_barang_level/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Info_barang_level_model->total_rows($q);
        $info_barang_level = $this->Info_barang_level_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'info_barang_level_data' => $info_barang_level,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('info_barang_level/info_barang_level_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Info_barang_level_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_barang' => $row->id_barang,
		'nama_level' => $row->nama_level,
		'harga_sewa' => $row->harga_sewa,
		'porsi_royalti' => $row->porsi_royalti,
	    );
            $this->load->view('info_barang_level/info_barang_level_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('info_barang_level'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('info_barang_level/create_action'),
	    'id_barang' => set_value('id_barang'),
	    'nama_level' => set_value('nama_level'),
	    'harga_sewa' => set_value('harga_sewa'),
	    'porsi_royalti' => set_value('porsi_royalti'),
	);
        $this->load->view('info_barang_level/info_barang_level_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'harga_sewa' => $this->input->post('harga_sewa',TRUE),
		'porsi_royalti' => $this->input->post('porsi_royalti',TRUE),
	    );

            $this->Info_barang_level_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('info_barang_level'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Info_barang_level_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('info_barang_level/update_action'),
		'id_barang' => set_value('id_barang', $row->id_barang),
		'nama_level' => set_value('nama_level', $row->nama_level),
		'harga_sewa' => set_value('harga_sewa', $row->harga_sewa),
		'porsi_royalti' => set_value('porsi_royalti', $row->porsi_royalti),
	    );
            $this->load->view('info_barang_level/info_barang_level_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('info_barang_level'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_barang', TRUE));
        } else {
            $data = array(
		'harga_sewa' => $this->input->post('harga_sewa',TRUE),
		'porsi_royalti' => $this->input->post('porsi_royalti',TRUE),
	    );

            $this->Info_barang_level_model->update($this->input->post('id_barang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('info_barang_level'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Info_barang_level_model->get_by_id($id);

        if ($row) {
            $this->Info_barang_level_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('info_barang_level'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('info_barang_level'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('harga_sewa', 'harga sewa', 'trim|required');
	$this->form_validation->set_rules('porsi_royalti', 'porsi royalti', 'trim|required');

	$this->form_validation->set_rules('id_barang', 'id_barang', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Info_barang_level.php */
/* Location: ./application/controllers/Info_barang_level.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:08 */
/* http://harviacode.com */