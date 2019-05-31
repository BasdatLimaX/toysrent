<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Chat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'chat/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'chat/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'chat/index.html';
            $config['first_url'] = base_url() . 'chat/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Chat_model->total_rows($q);
        $chat = $this->Chat_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'chat_data' => $chat,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
<<<<<<< HEAD
        $this->template_front->display('chat/chat_list', $data);
=======
        $this->load->view('chat/chat_list', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
    }

    public function read($id) 
    {
        $row = $this->Chat_model->get_by_id($id);
<<<<<<< HEAD
        $rows = $this->Chat_model->get_detail($row->no_ktp_anggota);
        $data = array();
        if ($row) {
            $data['head'] = array(
=======
        if ($row) {
            $data = array(
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
		'id' => $row->id,
		'pesan' => $row->pesan,
		'date_time' => $row->date_time,
		'no_ktp_anggota' => $row->no_ktp_anggota,
<<<<<<< HEAD
        'no_ktp_admin' => $row->no_ktp_admin,
        'nama_lengkap' => $row->nama_lengkap,
        );
        $data['detail'] = $rows;
            $this->template_front->display('chat/chat_read', $data);
=======
		'no_ktp_admin' => $row->no_ktp_admin,
	    );
            $this->load->view('chat/chat_read', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('chat'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('chat/create_action'),
<<<<<<< HEAD
	   
	    'pesan' => set_value('pesan'),
	    'date_time' => date('Y-m-d H:i:s'),
	    
	);
    $this->template_front->display('chat/chat_form', $data);
=======
	    'id' => set_value('id'),
	    'pesan' => set_value('pesan'),
	    'date_time' => set_value('date_time'),
	    'no_ktp_anggota' => set_value('no_ktp_anggota'),
	    'no_ktp_admin' => set_value('no_ktp_admin'),
	);
        $this->load->view('chat/chat_form', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'pesan' => $this->input->post('pesan',TRUE),
		'date_time' => $this->input->post('date_time',TRUE),
		'no_ktp_anggota' => $this->input->post('no_ktp_anggota',TRUE),
		'no_ktp_admin' => $this->input->post('no_ktp_admin',TRUE),
	    );

            $this->Chat_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('chat'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Chat_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
<<<<<<< HEAD
                'action' => base_url('chat/update_action'),
=======
                'action' => site_url('chat/update_action'),
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
		'id' => set_value('id', $row->id),
		'pesan' => set_value('pesan', $row->pesan),
		'date_time' => set_value('date_time', $row->date_time),
		'no_ktp_anggota' => set_value('no_ktp_anggota', $row->no_ktp_anggota),
<<<<<<< HEAD
        'no_ktp_admin' => set_value('no_ktp_admin', $row->no_ktp_admin),
        'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
	    );
        $this->template_front->display('chat/chat_update_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(base_url('chat'));
=======
		'no_ktp_admin' => set_value('no_ktp_admin', $row->no_ktp_admin),
	    );
            $this->load->view('chat/chat_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('chat'));
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'pesan' => $this->input->post('pesan',TRUE),
		'date_time' => $this->input->post('date_time',TRUE),
		'no_ktp_anggota' => $this->input->post('no_ktp_anggota',TRUE),
		'no_ktp_admin' => $this->input->post('no_ktp_admin',TRUE),
<<<<<<< HEAD
        'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),    
    );
=======
	    );
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7

            $this->Chat_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('chat'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Chat_model->get_by_id($id);

        if ($row) {
            $this->Chat_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('chat'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('chat'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('pesan', 'pesan', 'trim|required');
	$this->form_validation->set_rules('date_time', 'date time', 'trim|required');
	$this->form_validation->set_rules('no_ktp_anggota', 'no ktp anggota', 'trim|required');
	$this->form_validation->set_rules('no_ktp_admin', 'no ktp admin', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Chat.php */
/* Location: ./application/controllers/Chat.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:08 */
/* http://harviacode.com */