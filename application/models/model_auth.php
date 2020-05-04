<?php

class Model_auth extends CI_Model{
    public function cek_login()
    {
        $username_admin = set_value('username_admin');
        $password       = set_value('password');

        $result         = $this->db->where('username_admin',$username_admin)
                                    ->where('password',$password)
                                    ->limit(1)
                                    ->get('admin');

        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

}