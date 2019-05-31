<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_pesanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_pesanan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang_pesanan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang_pesanan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang_pesanan/index.html';
            $config['first_url'] = base_url() . 'barang_pesanan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_pesanan_model->total_rows($q);
        $barang_pesanan = $this->Barang_pesanan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_pesanan_data' => $barang_pesanan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('barang_pesanan/barang_pesanan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Barang_pesanan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pemesanan' => $row->id_pemesanan,
		'no_urut' => $row->no_urut,
		'tanggal_sewa' => $row->tanggal_sewa,
		'lama_sewa' => $row->lama_sewa,
		'tanggal_kembali' => $row->tanggal_kembali,
		'nama_status' => $row->nama_status,
		'id_barang' => $row->id_barang,
	    );
            $this->load->view('barang_pesanan/barang_pesanan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_pesanan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang_pesanan/create_action'),
	    'id_pemesanan' => set_value('id_pemesanan'),
	    'no_urut' => set_value('no_urut'),
	    'tanggal_sewa' => set_value('tanggal_sewa'),
	    'lama_sewa' => set_value('lama_sewa'),
	    'tanggal_kembali' => set_value('tanggal_kembali'),
	    'nama_status' => set_value('nama_status'),
	    'id_barang' => set_value('id_barang'),
	);
        $this->load->view('barang_pesanan/barang_pesanan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tanggal_sewa' => $this->input->post('tanggal_sewa',TRUE),
		'lama_sewa' => $this->input->post('lama_sewa',TRUE),
		'tanggal_kembali' => $this->input->post('tanggal_kembali',TRUE),
		'nama_status' => $this->input->post('nama_status',TRUE),
		'id_barang' => $this->input->post('id_barang',TRUE),
	    );

            $this->Barang_pesanan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang_pesanan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_pesanan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang_pesanan/update_action'),
		'id_pemesanan' => set_value('id_pemesanan', $row->id_pemesanan),
		'no_urut' => set_value('no_urut', $row->no_urut),
		'tanggal_sewa' => set_value('tanggal_sewa', $row->tanggal_sewa),
		'lama_sewa' => set_value('lama_sewa', $row->lama_sewa),
		'tanggal_kembali' => set_value('tanggal_kembali', $row->tanggal_kembali),
		'nama_status' => set_value('nama_status', $row->nama_status),
		'id_barang' => set_value('id_barang', $row->id_barang),
	    );
            $this->load->view('barang_pesanan/barang_pesanan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_pesanan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pemesanan', TRUE));
        } else {
            $data = array(
		'tanggal_sewa' => $this->input->post('tanggal_sewa',TRUE),
		'lama_sewa' => $this->input->post('lama_sewa',TRUE),
		'tanggal_kembali' => $this->input->post('tanggal_kembali',TRUE),
		'nama_status' => $this->input->post('nama_status',TRUE),
		'id_barang' => $this->input->post('id_barang',TRUE),
	    );

            $this->Barang_pesanan_model->update($this->input->post('id_pemesanan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_pesanan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_pesanan_model->get_by_id($id);

        if ($row) {
            $this->Barang_pesanan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang_pesanan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_pesanan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tanggal_sewa', 'tanggal sewa', 'trim|required');
	$this->form_validation->set_rules('lama_sewa', 'lama sewa', 'trim|required');
	$this->form_validation->set_rules('tanggal_kembali', 'tanggal kembali', 'trim|required');
	$this->form_validation->set_rules('nama_status', 'nama status', 'trim|required');
	$this->form_validation->set_rules('id_barang', 'id barang', 'trim|required');

	$this->form_validation->set_rules('id_pemesanan', 'id_pemesanan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Barang_pesanan.php */
/* Location: ./application/controllers/Barang_pesanan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:08 */
/* http://harviacode.com */