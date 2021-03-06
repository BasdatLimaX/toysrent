<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_dikirim extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_dikirim_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang_dikirim/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang_dikirim/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang_dikirim/index.html';
            $config['first_url'] = base_url() . 'barang_dikirim/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
<<<<<<< HEAD
        $config['total_rows'] = $this->Barang_dikirim_model->total_rows($q);
        $barang_dikirim = $this->Barang_dikirim_model->get_limit_data($config['per_page'], $start, $q);
=======
        if($this->session->userdata('role')=="anggota") {
            $config['total_rows'] = $this->Barang_dikirim_model->total_rows($q,$this->session->userdata('no_ktp'));
            $barang_dikirim = $this->Barang_dikirim_model->get_limit_data($config['per_page'], $start, $q,$this->session->userdata('no_ktp'));
        } else {
            $config['total_rows'] = $this->Barang_dikirim_model->total_rows($q);
            $barang_dikirim = $this->Barang_dikirim_model->get_limit_data($config['per_page'], $start, $q);
        }
        
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_dikirim_data' => $barang_dikirim,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
<<<<<<< HEAD
        $this->load->view('barang_dikirim/barang_dikirim_list', $data);
=======
        $this->template_front->display('barang_dikirim/barang_dikirim_list', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
    }

    public function read($id) 
    {
        $row = $this->Barang_dikirim_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no_resi' => $row->no_resi,
		'id_barang' => $row->id_barang,
		'tanggal_review' => $row->tanggal_review,
		'review' => $row->review,
		'no_urut' => $row->no_urut,
	    );
<<<<<<< HEAD
            $this->load->view('barang_dikirim/barang_dikirim_read', $data);
=======
            $this->template_front->display('barang_dikirim/barang_dikirim_read', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_dikirim'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang_dikirim/create_action'),
	    'no_resi' => set_value('no_resi'),
	    'id_barang' => set_value('id_barang'),
	    'tanggal_review' => set_value('tanggal_review'),
	    'review' => set_value('review'),
	    'no_urut' => set_value('no_urut'),
	);
<<<<<<< HEAD
        $this->load->view('barang_dikirim/barang_dikirim_form', $data);
=======
        $this->template_front->display('barang_dikirim/barang_dikirim_form', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_barang' => $this->input->post('id_barang',TRUE),
		'tanggal_review' => $this->input->post('tanggal_review',TRUE),
		'review' => $this->input->post('review',TRUE),
	    );

            $this->Barang_dikirim_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang_dikirim'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_dikirim_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang_dikirim/update_action'),
		'no_resi' => set_value('no_resi', $row->no_resi),
		'id_barang' => set_value('id_barang', $row->id_barang),
		'tanggal_review' => set_value('tanggal_review', $row->tanggal_review),
		'review' => set_value('review', $row->review),
		'no_urut' => set_value('no_urut', $row->no_urut),
	    );
<<<<<<< HEAD
            $this->load->view('barang_dikirim/barang_dikirim_form', $data);
=======
            $this->template_front->display('barang_dikirim/barang_dikirim_form', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_dikirim'));
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
		'tanggal_review' => $this->input->post('tanggal_review',TRUE),
		'review' => $this->input->post('review',TRUE),
	    );

            $this->Barang_dikirim_model->update($this->input->post('no_resi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_dikirim'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_dikirim_model->get_by_id($id);

        if ($row) {
            $this->Barang_dikirim_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang_dikirim'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_dikirim'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_barang', 'id barang', 'trim|required');
	$this->form_validation->set_rules('tanggal_review', 'tanggal review', 'trim|required');
	$this->form_validation->set_rules('review', 'review', 'trim|required');

	$this->form_validation->set_rules('no_resi', 'no_resi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Barang_dikirim.php */
/* Location: ./application/controllers/Barang_dikirim.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:08 */
/* http://harviacode.com */