<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'admin/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'admin/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'admin/index.html';
            $config['first_url'] = base_url() . 'admin/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Admin_model->total_rows($q);
        $admin = $this->Admin_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'admin_data' => $admin,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('admin/admin_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Admin_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no_ktp' => $row->no_ktp,
	    );
            $this->load->view('admin/admin_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('admin/create_action'),
	    'no_ktp' => set_value('no_ktp'),
	);
        $this->load->view('admin/admin_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
	    );

            $this->Admin_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Admin_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admin/update_action'),
		'no_ktp' => set_value('no_ktp', $row->no_ktp),
	    );
            $this->load->view('admin/admin_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no_ktp', TRUE));
        } else {
            $data = array(
	    );

            $this->Admin_model->update($this->input->post('no_ktp', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Admin_model->get_by_id($id);

        if ($row) {
            $this->Admin_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin'));
        }
    }

    public function _rules() 
    {

	$this->form_validation->set_rules('no_ktp', 'no_ktp', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:07 */
/* http://harviacode.com */