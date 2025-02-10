<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtModel extends Model
{
    protected $table = 'artworks';

    public function getArtworks(){
        $builder = $this->db->table($this->table);
        $builder->orderBy('created_at', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getRecentArtworks(){
        $builder = $this->db->table($this->table);
        $builder->orderBy('created_at', 'DESC');
        $builder->limit('3');
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        // die();
        return $query->getResult();
    }

    public function sortByYear($year){
        $builder = $this->db->table($this->table);
        $builder->where('year', $year);
        $builder->orderBy('created_at', 'DESC');
        $query = $builder->get();
        //  echo $this->db->getLastQuery();
        // die();
        return $query->getResult();
    }

    public function countSort($year){
        $builder = $this->db->table($this->table);
        $builder->where('year', $year);
        return $builder->countAllResults();
        // echo $this->db->getLastQuery();
        // die();
    }
}
