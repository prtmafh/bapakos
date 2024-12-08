<?php
function cek_login()
{
    $ci = get_instance();
    $id_role = $ci->session->userdata('id_role');
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses ditolak. Anda belum login!! </div>');
        if ($id_role != 1) {
            redirect('autentifikasi');
        } else {
            redirect('admin');
        }
    }
}
function cek_login_pencari()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses ditolak. Anda belum login!! </div>');
        if ($ci->session->userdata('id_role' == 3)) {
            redirect('home');
        } else {
            redirect('pencari');
        }
    } else {
        $role_id = $ci->session->userdata('role_id');
        $id_user = $ci->session->userdata('id_user');
    }
}
function cek_login_pemilik()
{
    $ci = get_instance();
    $id_role = $ci->session->userdata('id_role');
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses ditolak. Anda belum login!! </div>');
        if ($id_role != 2) {
            redirect('pemilik');
        } else {
            redirect('pemilik/pemilik');
        }
    }
}
