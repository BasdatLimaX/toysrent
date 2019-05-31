<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengiriman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengiriman_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pengiriman/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pengiriman/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pengiriman/index.html';
            $config['first_url'] = base_url() . 'pengiriman/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pengiriman_model->total_rows($q);
        $pengiriman = $this->Pengiriman_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pengiriman_data' => $pengiriman,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pengiriman/pengiriman_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pengiriman_model->get_by_id($id);
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
            $this->load->view('pengiriman/pengiriman_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengiriman'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengiriman/create_action'),
	    'no_resi' => set_value('no_resi'),
	    'id_pemesanan' => set_value('id_pemesanan'),
	    'metode' => set_value('metode'),
	    'ongkos' => set_value('ongkos'),
	    'tanggal' => set_value('tanggal'),
	    'no_ktp_anggota' => set_value('no_ktp_anggota'),
	    'nama_alamat_anggota' => set_value('nama_alamat_anggota'),
	);
        $this->load->view('pengiriman/pengiriman_form', $data);
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

            $this->Pengiriman_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengiriman'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pengiriman_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengiriman/update_action'),
		'no_resi' => set_value('no_resi', $row->no_resi),
		'id_pemesanan' => set_value('id_pemesanan', $row->id_pemesanan),
		'metode' => set_value('metode', $row->metode),
		'ongkos' => set_value('ongkos', $row->ongkos),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'no_ktp_anggota' => set_value('no_ktp_anggota', $row->no_ktp_anggota),
		'nama_alamat_anggota' => set_value('nama_alamat_anggota', $row->nama_alamat_anggota),
	    );
            $this->load->view('pengiriman/pengiriman_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengiriman'));
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

            $this->Pengiriman_model->update($this->input->post('no_resi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengiriman'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengiriman_model->get_by_id($id);

        if ($row) {
            $this->Pengiriman_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pengiriman'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengiriman'));
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

/* End of file Pengiriman.php */
/* Location: ./application/controllers/Pengiriman.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:09 */
/* http://harviacode.com */