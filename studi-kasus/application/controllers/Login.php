<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';

            if ($this->session->userdata('id_user')) {
                redirect('dashboard');
            }

            $this->load->view('login/index', $data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            /* 
                disini saya tidak membuat model karena kita hanya membutuhkan 1 kali pemanggilan database
                kita bisa saja tidak membutuhkan model untuk mengambil data dari database 
                tapi sebaiknya sesuai dengan aturan codeigniter yaitu menggunakan model
            */

            // mengambil data user berdasarkan username yang diinput
            $user = $this->db->query("SELECT * FROM user WHERE username = '$username'")->row();

            // jika data usernya ada
            if ($user) {
                // cek apakah passwordnya benar
                if (password_verify($password, $user->password)) {
                    // jika benar berikan session sesuai data user
                    $data = [
                        'id_user' => $user->id_user,
                        'level' => $user->level
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard');
                } else {
                    // jika passwordnya salah
                    $this->session->set_flashdata('gagal', 'Password Salah');
                    redirect('login');
                }
            } else {
                // jika data usernya tidak ada
                $this->session->set_flashdata('gagal', 'Username Salah');
                redirect('login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
