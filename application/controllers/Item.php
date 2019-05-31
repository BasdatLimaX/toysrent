<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Item extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
<<<<<<< HEAD
        $this->load->model(array('Kategori_model'=>'Kategori'));
        $this->load->model(array('Kategori_item_model'=>'KategoriItem'));
=======
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'item/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'item/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'item/index.html';
            $config['first_url'] = base_url() . 'item/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Item_model->total_rows($q);
        $item = $this->Item_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'item_data' => $item,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        // $this->load->view('item/item_list', $data);
        $this->template_front->display('item/item_list', $data);
    }

    public function home()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'item/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'item/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'item/index.html';
            $config['first_url'] = base_url() . 'item/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Item_model->total_rows_home($q,'silver');
        $item = $this->Item_model->get_limit_data_home($config['per_page'], $start, $q,'silver');

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'item_data' => $item,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template_front->display('item/item_home', $data);
        // $this->load->view('item/item_home', $data);
    }

    public function read($id) 
    {
        $row = $this->Item_model->get_by_id($id);
        if ($row) {
            $data = array(
		'nama' => $row->nama,
		'deskripsi' => $row->deskripsi,
		'usia_dari' => $row->usia_dari,
		'usia_sampai' => $row->usia_sampai,
		'bahan' => $row->bahan,
	    );
            $this->load->view('item/item_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('item'));
        }
    }

    public function create() 
    {
<<<<<<< HEAD
        $kategori = $this->Kategori->get_all();
        $data = array(
            'button' => 'Create',
            'action' => site_url('item/create_action'),
            'nama' => set_value('nama'),
            'deskripsi' => set_value('deskripsi'),
            'usia_dari' => set_value('usia_dari'),
            'usia_sampai' => set_value('usia_sampai'),
            'bahan' => set_value('bahan'),
            'kategori' => $kategori,
	    );
=======
        $data = array(
            'button' => 'Create',
            'action' => site_url('item/create_action'),
	    'nama' => set_value('nama'),
	    'deskripsi' => set_value('deskripsi'),
	    'usia_dari' => set_value('usia_dari'),
	    'usia_sampai' => set_value('usia_sampai'),
	    'bahan' => set_value('bahan'),
        'kategori' => set_value('kategori'),
	);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
        $this->template_front->display('item/item_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();
<<<<<<< HEAD
        $kategori = $this->input->post("kategori");
        $inputKategoriItem = array();
        foreach ($kategori as $key =>$value) {
            $inputKategoriItem[$key]["nama_item"] = $this->input->post("nama");
            $inputKategoriItem[$key]["nama_kategori"] = $value;
        }
       
=======

>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
<<<<<<< HEAD
                'nama' => $this->input->post('nama',TRUE),
                'deskripsi' => $this->input->post('deskripsi',TRUE),
                'usia_dari' => $this->input->post('usia_dari',TRUE),
                'usia_sampai' => $this->input->post('usia_sampai',TRUE),
                'bahan' => $this->input->post('bahan',TRUE),
            );
            
            $this->Item_model->insert($data);
            $this->KategoriItem->insert_batch($inputKategoriItem); /* batch insert */
=======
		'nama' => $this->input->post('nama',TRUE),
        'deskripsi' => $this->input->post('deskripsi',TRUE),
		'usia_dari' => $this->input->post('usia_dari',TRUE),
		'usia_sampai' => $this->input->post('usia_sampai',TRUE),
		'bahan' => $this->input->post('bahan',TRUE),
	    );

            $this->Item_model->insert($data);
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('item'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Item_model->get_by_id($id);
<<<<<<< HEAD
        $kategori = $this->Kategori->get_all();
=======
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('item/update_action'),
		'nama' => set_value('nama', $row->nama),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'usia_dari' => set_value('usia_dari', $row->usia_dari),
		'usia_sampai' => set_value('usia_sampai', $row->usia_sampai),
<<<<<<< HEAD
        'bahan' => set_value('bahan', $row->bahan),
        'kategori' => $kategori,
=======
		'bahan' => set_value('bahan', $row->bahan),
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
	    );
            $this->template_front->display('item/item_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('item'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('nama', TRUE));
        } else {
            $data = array(
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'usia_dari' => $this->input->post('usia_dari',TRUE),
		'usia_sampai' => $this->input->post('usia_sampai',TRUE),
		'bahan' => $this->input->post('bahan',TRUE),
	    );

            $this->Item_model->update($this->input->post('nama', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('item'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Item_model->get_by_id($id);

        if ($row) {
            $this->Item_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('item'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('item'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('usia_dari', 'usia dari', 'trim|required');
	$this->form_validation->set_rules('usia_sampai', 'usia sampai', 'trim|required');
	$this->form_validation->set_rules('bahan', 'bahan', 'trim|required');

	$this->form_validation->set_rules('nama', 'nama', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Item.php */
/* Location: ./application/controllers/Item.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-25 19:55:08 */
/* http://harviacode.com */