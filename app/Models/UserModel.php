<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function get_users($username){
        $builder = $this->db->table('users');
        $builder->select('user_id, name, user_password, username');
        $builder->where('username', $username);
        $builder->orderBy('created_at', 'DESC');
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        // die();
        return $query->getRow();
    }

    public function register($data_register){
        $builder = $this->db->table('users');
        $query = $builder->insert($data_register);
        if ($query) {
            return true;
        }else {
            return false;
        }
    }

    public function userByName($usn){
        $builder = $this->db->table('users');
        $builder->select('user_id');
        $builder->where('username', $usn);
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        // die();
        return $query->getRow();
    }
}
