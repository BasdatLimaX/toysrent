<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Pengguna_model','Level_keanggotaan_model','Admin_model','Anggota_model'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pengguna/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pengguna/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pengguna/index.html';
            $config['first_url'] = base_url() . 'pengguna/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pengguna_model->total_rows($q);
        $pengguna = $this->Pengguna_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pengguna_data' => $pengguna,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
<<<<<<< HEAD
        $this->load->view('pengguna/pengguna_list', $data);
=======
        $this->template_front->display('pengguna/pengguna_list', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
    }

    public function read($id) 
    {
        $row = $this->Pengguna_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no_ktp' => $row->no_ktp,
		'nama_lengkap' => $row->nama_lengkap,
		'email' => $row->email,
		'tanggal_lahir' => $row->tanggal_lahir,
		'no_telp' => $row->no_telp,
	    );
<<<<<<< HEAD
            $this->load->view('pengguna/pengguna_read', $data);
=======
            $this->template_front->display('pengguna/pengguna_read', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengguna'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengguna/create_action'),
	    'no_ktp' => set_value('no_ktp'),
	    'nama_lengkap' => set_value('nama_lengkap'),
	    'email' => set_value('email'),
	    'tanggal_lahir' => set_value('tanggal_lahir'),
	    'no_telp' => set_value('no_telp'),
	);
<<<<<<< HEAD
        $this->load->view('pengguna/pengguna_form', $data);
=======
        $this->template_front->display('pengguna/pengguna_form', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'no_ktp' => $this->input->post('no_ktp',TRUE),
        'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'email' => $this->input->post('email',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
	    );
<<<<<<< HEAD
            var_dump($this->input->post('role',TRUE));
            die();  
            $this->Pengguna_model->insert($data);
=======
            // var_dump($this->input->post('role',TRUE));
            // die();  
            // $this->Pengguna_model->insert($data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
            // if($this->input->post('role',TRUE)='admin') {
            //     $data2 = array(
            //         'no_ktp' => $this->input->post('no_ktp',TRUE),
            //     );
            //      $this->Admin_model->insert($data2);
            //  } else if($this->input->post('role',TRUE)='admin') {
            //     $level = $this->Level_model->get_min();
            //     $data2 = array(
            //         'no_ktp' => $this->input->post('no_ktp',TRUE),
            //         'poin' => 0,
            //         'level' => $level->nama_level,
            //     );
            //     $this->Anggota_model->insert($data2);
            //  }
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengguna'));
        }
    }

    public function create_action_pengguna() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'no_ktp' => $this->input->post('no_ktp',TRUE),
                'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
                'email' => $this->input->post('email',TRUE),
                'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
                'no_telp' => $this->input->post('no_telp',TRUE),
            );
            $data_pengguna = array(
                'no_ktp' => $this->input->post('no_ktp',TRUE),
            );

            $this->Pengguna_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengguna'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pengguna_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengguna/update_action'),
		'no_ktp' => set_value('no_ktp', $row->no_ktp),
		'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
		'email' => set_value('email', $row->email),
		'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
		'no_telp' => set_value('no_telp', $row->no_telp),
	    );
<<<<<<< HEAD
            $this->load->view('pengguna/pengguna_form', $data);
=======
            $this->template_front->display('pengguna/pengguna_form', $data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengguna'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no_ktp', TRUE));
        } else {
            $data = array(
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'email' => $this->input->post('email',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
	    );

            $this->Pengguna_model->update($this->input->post('no_ktp', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengguna'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengguna_model->get_by_id($id);

        if ($row) {
            $this->Pengguna_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pengguna'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengguna'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');

	$this->form_validation->set_rules('no_ktp', 'no_ktp', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/Pengguna.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:09 */
/* http://harviacode.com */