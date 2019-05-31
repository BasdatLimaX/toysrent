<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengembalian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengembalian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pengembalian/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pengembalian/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pengembalian/index.html';
            $config['first_url'] = base_url() . 'pengembalian/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pengembalian_model->total_rows($q);
        $pengembalian = $this->Pengembalian_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pengembalian_data' => $pengembalian,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pengembalian/pengembalian_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pengembalian_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no_resi' => $row->no_resi,
		'id_pemesanan' => $row->id_pemesanan,
		'metode' => $row->metode,
		'ongkos' => $row->ongkos,
		'tanggal' => $row->tanggal,
		'no_ktp_anggota' => $row->no_ktp_anggota,
		'nama_alamat_anggota' => $row->nama_alamat_anggota,
	    );
            $this->load->view('pengembalian/pengembalian_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengembalian'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengembalian/create_action'),
	    'no_resi' => set_value('no_resi'),
	    'id_pemesanan' => set_value('id_pemesanan'),
	    'metode' => set_value('metode'),
	    'ongkos' => set_value('ongkos'),
	    'tanggal' => set_value('tanggal'),
	    'no_ktp_anggota' => set_value('no_ktp_anggota'),
	    'nama_alamat_anggota' => set_value('nama_alamat_anggota'),
	);
        $this->load->view('pengembalian/pengembalian_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_pemesanan' => $this->input->post('id_pemesanan',TRUE),
		'metode' => $this->input->post('metode',TRUE),
		'ongkos' => $this->input->post('ongkos',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'no_ktp_anggota' => $this->input->post('no_ktp_anggota',TRUE),
		'nama_alamat_anggota' => $this->input->post('nama_alamat_anggota',TRUE),
	    );

            $this->Pengembalian_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengembalian'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pengembalian_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengembalian/update_action'),
		'no_resi' => set_value('no_resi', $row->no_resi),
		'id_pemesanan' => set_value('id_pemesanan', $row->id_pemesanan),
		'metode' => set_value('metode', $row->metode),
		'ongkos' => set_value('ongkos', $row->ongkos),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'no_ktp_anggota' => set_value('no_ktp_anggota', $row->no_ktp_anggota),
		'nama_alamat_anggota' => set_value('nama_alamat_anggota', $row->nama_alamat_anggota),
	    );
            $this->load->view('pengembalian/pengembalian_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengembalian'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no_resi', TRUE));
        } else {
            $data = array(
		'id_pemesanan' => $this->input->post('id_pemesanan',TRUE),
		'metode' => $this->input->post('metode',TRUE),
		'ongkos' => $this->input->post('ongkos',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'no_ktp_anggota' => $this->input->post('no_ktp_anggota',TRUE),
		'nama_alamat_anggota' => $this->input->post('nama_alamat_anggota',TRUE),
	    );

            $this->Pengembalian_model->update($this->input->post('no_resi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengembalian'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengembalian_model->get_by_id($id);

        if ($row) {
            $this->Pengembalian_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pengembalian'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengembalian'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_pemesanan', 'id pemesanan', 'trim|required');
	$this->form_validation->set_rules('metode', 'metode', 'trim|required');
	$this->form_validation->set_rules('ongkos', 'ongkos', 'trim|required|numeric');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('no_ktp_anggota', 'no ktp anggota', 'trim|required');
	$this->form_validation->set_rules('nama_alamat_anggota', 'nama alamat anggota', 'trim|required');

	$this->form_validation->set_rules('no_resi', 'no_resi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pengembalian.php */
/* Location: ./application/controllers/Pengembalian.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:09 */
/* http://harviacode.com */