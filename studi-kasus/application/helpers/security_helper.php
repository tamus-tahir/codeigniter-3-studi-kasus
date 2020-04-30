<?php

// cek apakah usernya login
function login()
{
    // untuk helper kita tidak bisa menggunakan $this
    // kita harus membuat variabel baru yang memanggil fungsi get_instance
    // variabel ini nantinya akan menggantikan fungsinya $this
    $ci = get_instance();
    // jika tidak ada session id user
    // session hanya didapatkan pada saat login
    if (!$ci->session->userdata('id_user')) {
        // alihkan ke halaman login
        redirect('login');
    }
}

function admin()
{
    $ci = get_instance();
    // jika level tidak sama dengan admin
    if ($ci->session->userdata('level') != 'Admin') {
        // alihkan ke halaman dashboard 
        // jangan ke halaman login nanti usernya harus login lagi 
        redirect('dashboard');
    }
}
