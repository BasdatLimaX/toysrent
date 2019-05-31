<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pemesanan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pemesanan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pemesanan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pemesanan/index.html';
            $config['first_url'] = base_url() . 'pemesanan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pemesanan_model->total_rows($q);
        $pemesanan = $this->Pemesanan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pemesanan_data' => $pemesanan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pemesanan/pemesanan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pemesanan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pemesanan' => $row->id_pemesanan,
		'datetime_pemesanan' => $row->datetime_pemesanan,
		'kuantitas_barang' => $row->kuantitas_barang,
		'harga_sewa' => $row->harga_sewa,
		'ongkos' => $row->ongkos,
		'no_ktp_pemesan' => $row->no_ktp_pemesan,
		'status' => $row->status,
	    );
            $this->load->view('pemesanan/pemesanan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pemesanan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pemesanan/create_action'),
	    'id_pemesanan' => set_value('id_pemesanan'),
	    'datetime_pemesanan' => set_value('datetime_pemesanan'),
	    'kuantitas_barang' => set_value('kuantitas_barang'),
	    'harga_sewa' => set_value('harga_sewa'),
	    'ongkos' => set_value('ongkos'),
	    'no_ktp_pemesan' => set_value('no_ktp_pemesan'),
	    'status' => set_value('status'),
	);
        $this->load->view('pemesanan/pemesanan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'datetime_pemesanan' => $this->input->post('datetime_pemesanan',TRUE),
		'kuantitas_barang' => $this->input->post('kuantitas_barang',TRUE),
		'harga_sewa' => $this->input->post('harga_sewa',TRUE),
		'ongkos' => $this->input->post('ongkos',TRUE),
		'no_ktp_pemesan' => $this->input->post('no_ktp_pemesan',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Pemesanan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pemesanan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pemesanan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pemesanan/update_action'),
		'id_pemesanan' => set_value('id_pemesanan', $row->id_pemesanan),
		'datetime_pemesanan' => set_value('datetime_pemesanan', $row->datetime_pemesanan),
		'kuantitas_barang' => set_value('kuantitas_barang', $row->kuantitas_barang),
		'harga_sewa' => set_value('harga_sewa', $row->harga_sewa),
		'ongkos' => set_value('ongkos', $row->ongkos),
		'no_ktp_pemesan' => set_value('no_ktp_pemesan', $row->no_ktp_pemesan),
		'status' => set_value('status', $row->status),
	    );
            $this->load->view('pemesanan/pemesanan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pemesanan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pemesanan', TRUE));
        } else {
            $data = array(
		'datetime_pemesanan' => $this->input->post('datetime_pemesanan',TRUE),
		'kuantitas_barang' => $this->input->post('kuantitas_barang',TRUE),
		'harga_sewa' => $this->input->post('harga_sewa',TRUE),
		'ongkos' => $this->input->post('ongkos',TRUE),
		'no_ktp_pemesan' => $this->input->post('no_ktp_pemesan',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Pemesanan_model->update($this->input->post('id_pemesanan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pemesanan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pemesanan_model->get_by_id($id);

        if ($row) {
            $this->Pemesanan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pemesanan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pemesanan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('datetime_pemesanan', 'datetime pemesanan', 'trim|required');
	$this->form_validation->set_rules('kuantitas_barang', 'kuantitas barang', 'trim|required');
	$this->form_validation->set_rules('harga_sewa', 'harga sewa', 'trim|required');
	$this->form_validation->set_rules('ongkos', 'ongkos', 'trim|required');
	$this->form_validation->set_rules('no_ktp_pemesan', 'no ktp pemesan', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_pemesanan', 'id_pemesanan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pemesanan.php */
/* Location: ./application/controllers/Pemesanan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:09 */
/* http://harviacode.com */