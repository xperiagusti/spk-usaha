<?php
class Loginadmin extends MY_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('Mymod');
    }
   public function index(){
        $this->load->view('backend/login');
    }
    public function auth(){
        $user_username=strip_tags(str_replace("'", "", $this->input->post('user_username',TRUE)));
        $user_password=strip_tags(str_replace("'", "", $this->input->post('user_password',TRUE)));

        $cekuser = $this->Mymod->CekDataRows('user',['user_username' => $user_username])->num_rows();
        if($cekuser==0){
            $this->flashmsg('Username tidak ditemukan', 'danger');
            redirect('loginadmin');
        } else {

            $cadmin=$this->Mymod->cekadminlogin($user_username,$user_password);
            if($cadmin->num_rows() > 0){
                $xcadmin=$cadmin->row_array();
                $newdata = array(
                    'user_username'   => $xcadmin['user_username'],
                    'user_role'   => $xcadmin['user_role'],
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($newdata);
                redirect('main'); 
            }else{
                $this->flashmsg('Password anda salah', 'danger');
                redirect('loginadmin'); 
            }
        }

    }


    public function gagallogin(){
        $this->flashmsg('Username atau password anda salah', 'error');
        redirect('loginadmin');
    }

    public function logout(){
        $this->session->sess_destroy();
       
        $this->flashmsg('Anda Berhasil Log Out', 'success');
        redirect('loginadmin');
    }
}