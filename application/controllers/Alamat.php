<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alamat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Alamat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'alamat/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'alamat/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'alamat/index.html';
            $config['first_url'] = base_url() . 'alamat/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Alamat_model->total_rows($q);
        $alamat = $this->Alamat_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'alamat_data' => $alamat,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('alamat/alamat_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Alamat_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no_ktp_anggota' => $row->no_ktp_anggota,
		'nama' => $row->nama,
		'jalan' => $row->jalan,
		'nomor' => $row->nomor,
		'kota' => $row->kota,
		'kodepos' => $row->kodepos,
	    );
            $this->load->view('alamat/alamat_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('alamat'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('alamat/create_action'),
	    'no_ktp_anggota' => set_value('no_ktp_anggota'),
	    'nama' => set_value('nama'),
	    'jalan' => set_value('jalan'),
	    'nomor' => set_value('nomor'),
	    'kota' => set_value('kota'),
	    'kodepos' => set_value('kodepos'),
	);
        $this->load->view('alamat/alamat_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jalan' => $this->input->post('jalan',TRUE),
		'nomor' => $this->input->post('nomor',TRUE),
		'kota' => $this->input->post('kota',TRUE),
		'kodepos' => $this->input->post('kodepos',TRUE),
	    );

            $this->Alamat_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('alamat'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Alamat_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('alamat/update_action'),
		'no_ktp_anggota' => set_value('no_ktp_anggota', $row->no_ktp_anggota),
		'nama' => set_value('nama', $row->nama),
		'jalan' => set_value('jalan', $row->jalan),
		'nomor' => set_value('nomor', $row->nomor),
		'kota' => set_value('kota', $row->kota),
		'kodepos' => set_value('kodepos', $row->kodepos),
	    );
            $this->load->view('alamat/alamat_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('alamat'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no_ktp_anggota', TRUE));
        } else {
            $data = array(
		'jalan' => $this->input->post('jalan',TRUE),
		'nomor' => $this->input->post('nomor',TRUE),
		'kota' => $this->input->post('kota',TRUE),
		'kodepos' => $this->input->post('kodepos',TRUE),
	    );

            $this->Alamat_model->update($this->input->post('no_ktp_anggota', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('alamat'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Alamat_model->get_by_id($id);

        if ($row) {
            $this->Alamat_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('alamat'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('alamat'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jalan', 'jalan', 'trim|required');
	$this->form_validation->set_rules('nomor', 'nomor', 'trim|required');
	$this->form_validation->set_rules('kota', 'kota', 'trim|required');
	$this->form_validation->set_rules('kodepos', 'kodepos', 'trim|required');

	$this->form_validation->set_rules('no_ktp_anggota', 'no_ktp_anggota', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Alamat.php */
/* Location: ./application/controllers/Alamat.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:07 */
/* http://harviacode.com */