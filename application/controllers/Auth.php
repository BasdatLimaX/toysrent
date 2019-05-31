<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model(array('admin_model','anggota_model','pengguna_model'));
    }

	function index(){
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengguna/create_action'),
            'no_ktp' => set_value('no_ktp'),
            'nama_lengkap' => set_value('nama_lengkap'),
            'email' => set_value('email'),
            'tanggal_lahir' => set_value('tanggal_lahir'),
            'no_telp' => set_value('no_telp'),
        );
        $this->template_front->display('login_view',$data);
    }
 
    function login(){
        $email = $this->input->post('email');
        $no_ktp = $this->input->post('no_ktp');
        $where = array(
            'email' => $email,
        );
        
        $cek = $this->pengguna_model->cek_login($where);
        if($cek->num_rows() > 0){
            $where = array(
            'email' => $email,
            'no_ktp' => $no_ktp
            );

            $cek_login = $this->pengguna_model->cek_login($where);
            if($cek_login->num_rows() > 0){
                $cek_login = $cek_login->row();
                $cek_admin = $this->admin_model->get_by_ktp($cek_login->no_ktp);
                $cek_anggota = $this->anggota_model->get_by_ktp($cek_login->no_ktp);
                if($cek_admin->num_rows()>0){
                    $data_session = array(
                        'login_id' => uniqid(rand()),
                        'nama' => $cek_login->nama_lengkap,
                        'email' => $cek_login->email,
                        'no_ktp' => $cek_login->no_ktp,
                        'role' => "admin"
                    );
                } else if ($cek_anggota->num_rows()>0) {
                    $data_session = array(
                        'login_id' => uniqid(rand()),
                        'nama' => $cek_login->nama_lengkap,
                        'email' => $cek_login->email,
                        'level' => $cek_anggota->row()->level,
                        'no_ktp' => $cek_login->no_ktp,
                        'role' => "anggota"
                    );
                }
                else {
                    redirect(site_url('auth'));
                }

                $this->session->set_userdata($data_session);
                redirect(base_url('welcome'));
            } else {
                $data = array(
                    'email' => '', 
                    'error_message' => 'Nomor Ktp Salah',
                    'message' => ''
                );
                $this->template_front->display('login_view');
            }
        } else {
            $data = array(
                    'error_message' => 'Email Belum Terdaftar',
                    'message' => ''
                );
                $this->template_front->display('login_view');
        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}