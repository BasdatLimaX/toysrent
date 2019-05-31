<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Level_keanggotaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Level_keanggotaan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'level_keanggotaan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'level_keanggotaan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'level_keanggotaan/index.html';
            $config['first_url'] = base_url() . 'level_keanggotaan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Level_keanggotaan_model->total_rows($q);
        $level_keanggotaan = $this->Level_keanggotaan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'level_keanggotaan_data' => $level_keanggotaan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
<<<<<<< HEAD
        $this->load->view('level_keanggotaan/level_keanggotaan_list', $data);
=======
        $this->template_front->display('level_keanggotaan/level_keanggotaan_list', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
    }

    public function read($id) 
    {
        $row = $this->Level_keanggotaan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'nama_level' => $row->nama_level,
		'minimum_poin' => $row->minimum_poin,
		'deskripsi' => $row->deskripsi,
	    );
<<<<<<< HEAD
            $this->load->view('level_keanggotaan/level_keanggotaan_read', $data);
=======
            $this->template_front->display('level_keanggotaan/level_keanggotaan_read', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('level_keanggotaan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('level_keanggotaan/create_action'),
	    'nama_level' => set_value('nama_level'),
<<<<<<< HEAD
	    'minimum_poin' => set_value('minimum_poin'),
	    'deskripsi' => set_value('deskripsi'),
	);
        $this->load->view('level_keanggotaan/level_keanggotaan_form', $data);
=======
        'nama_level1' => set_value('nama_level'),
	    'minimum_poin' => set_value('minimum_poin'),
	    'deskripsi' => set_value('deskripsi'),
	);
        $this->template_front->display('level_keanggotaan/level_keanggotaan_form', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
<<<<<<< HEAD
		'minimum_poin' => $this->input->post('minimum_poin',TRUE),
=======
		'nama_level' => $this->input->post('nama_level1',TRUE),
        'minimum_poin' => $this->input->post('minimum_poin',TRUE),
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
		'deskripsi' => $this->input->post('deskripsi',TRUE),
	    );

            $this->Level_keanggotaan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('level_keanggotaan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Level_keanggotaan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('level_keanggotaan/update_action'),
<<<<<<< HEAD
		'nama_level' => set_value('nama_level', $row->nama_level),
		'minimum_poin' => set_value('minimum_poin', $row->minimum_poin),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
	    );
            $this->load->view('level_keanggotaan/level_keanggotaan_form', $data);
=======
		'nama_level1' => set_value('nama_level', $row->nama_level),
        'nama_level' => set_value('nama_level', $row->nama_level),
		'minimum_poin' => set_value('minimum_poin', $row->minimum_poin),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
	    );
            $this->template_front->display('level_keanggotaan/level_keanggotaan_form', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('level_keanggotaan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('nama_level', TRUE));
        } else {
            $data = array(
<<<<<<< HEAD
		'minimum_poin' => $this->input->post('minimum_poin',TRUE),
=======
		'nama_level' => $this->input->post('nama_level1',TRUE),
        'minimum_poin' => $this->input->post('minimum_poin',TRUE),
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
		'deskripsi' => $this->input->post('deskripsi',TRUE),
	    );

            $this->Level_keanggotaan_model->update($this->input->post('nama_level', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('level_keanggotaan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Level_keanggotaan_model->get_by_id($id);

        if ($row) {
            $this->Level_keanggotaan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('level_keanggotaan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('level_keanggotaan'));
        }
    }

    public function _rules() 
    {
<<<<<<< HEAD
	$this->form_validation->set_rules('minimum_poin', 'minimum poin', 'trim|required');
=======
	$this->form_validation->set_rules('nama_level', 'nama level', 'trim|required');
    $this->form_validation->set_rules('minimum_poin', 'minimum poin', 'trim|required');
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');

	$this->form_validation->set_rules('nama_level', 'nama_level', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Level_keanggotaan.php */
/* Location: ./application/controllers/Level_keanggotaan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:08 */
/* http://harviacode.com */