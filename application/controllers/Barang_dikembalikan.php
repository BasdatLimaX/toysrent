<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_dikembalikan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_dikembalikan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang_dikembalikan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang_dikembalikan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang_dikembalikan/index.html';
            $config['first_url'] = base_url() . 'barang_dikembalikan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_dikembalikan_model->total_rows($q);
        $barang_dikembalikan = $this->Barang_dikembalikan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_dikembalikan_data' => $barang_dikembalikan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('barang_dikembalikan/barang_dikembalikan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Barang_dikembalikan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no_resi' => $row->no_resi,
		'id_barang' => $row->id_barang,
		'no_urut' => $row->no_urut,
	    );
            $this->load->view('barang_dikembalikan/barang_dikembalikan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_dikembalikan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang_dikembalikan/create_action'),
	    'no_resi' => set_value('no_resi'),
	    'id_barang' => set_value('id_barang'),
	    'no_urut' => set_value('no_urut'),
	);
        $this->load->view('barang_dikembalikan/barang_dikembalikan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_barang' => $this->input->post('id_barang',TRUE),
	    );

            $this->Barang_dikembalikan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang_dikembalikan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_dikembalikan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang_dikembalikan/update_action'),
		'no_resi' => set_value('no_resi', $row->no_resi),
		'id_barang' => set_value('id_barang', $row->id_barang),
		'no_urut' => set_value('no_urut', $row->no_urut),
	    );
            $this->load->view('barang_dikembalikan/barang_dikembalikan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_dikembalikan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no_resi', TRUE));
        } else {
            $data = array(
		'id_barang' => $this->input->post('id_barang',TRUE),
	    );

            $this->Barang_dikembalikan_model->update($this->input->post('no_resi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_dikembalikan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_dikembalikan_model->get_by_id($id);

        if ($row) {
            $this->Barang_dikembalikan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang_dikembalikan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_dikembalikan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_barang', 'id barang', 'trim|required');

	$this->form_validation->set_rules('no_resi', 'no_resi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Barang_dikembalikan.php */
/* Location: ./application/controllers/Barang_dikembalikan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:08 */
/* http://harviacode.com */