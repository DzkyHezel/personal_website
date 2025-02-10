<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtworksModel extends Model
{
    public function defaultAlb($data_default)
    {
        $builder = $this->db->table('albums');
        $query = $builder->insert($data_default);
        // echo $this->db->getLastQuery();
        // die();
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getAlbumsByUser($user_id)
    {
        $builder = $this->db->table('albums');
        $builder->select('album_id, album_name, created_at');
        $builder->where('user_id', $user_id);
        $builder->orderBy('created_at', 'DESC');
        $query = $builder->get();
        return $query->getResult();
        // return $this->where('user_id', $user_id)->findAll();
    }

    public function getAlbumsById($alb_id)
    {
        $builder = $this->db->table('albums');
        $builder->where('album_id', $alb_id);
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        // die();
        return $query->getResult();
    }

    public function getAllAlbums($id)
    {
        $builder = $this->db->table('albums');
        $builder->select('album_id, album_name');
        $builder->where('user_id', $id);
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        // die();
        return $query->getResult();
    }

    public function addNewAlbum($data_new_album)
    {
        $builder = $this->db->table('albums');
        $query = $builder->insert($data_new_album);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function updateAlbum($id, $data_edit_album)
    {
        $builder = $this->db->table('albums');
        $builder->where('album_id', $id);
        $query = $builder->update($data_edit_album);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAlb($id)
    {
        $builder = $this->db->table('albums');
        $builder->where('album_id', $id);
        $query = $builder->delete();
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getPhotoAlbum($album_id, $user_id)
    {
        $builder = $this->db->table('photos');
        $builder->select('photo_id, photo_title, photo_desc, photo_url, created_at');
        $builder->where('user_id', $user_id);
        $builder->where('album_id', $album_id);
        $builder->orderBy('created_at', 'DESC');
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        // die();
        return $query->getResult();
    }

    public function getPhoto($id)
    {
        $builder = $this->db->table('photos');
        $builder->where('photo_id', $id);
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        // die();
        return $query->getResult();
    }

    public function getaPhoto($id)
    {
        $builder = $this->db->table('photos');
        $builder->where('photo_id', $id);
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        // die();
        return $query->getRow();
    }

    public function upload($data_photo)
    {
        $builder = $this->db->table('photos');
        $query = $builder->insert($data_photo);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function updateFoto($id, $data)
    {
        $builder = $this->db->table('photos');
        $builder->where('photo_id', $id);
        $query = $builder->update($data);
        // echo $this->db->getLastQuery();
        // die();
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteFoto($id)
    {
        $builder = $this->db->table('photos');
        $builder->where('photo_id', $id);
        $query = $builder->delete();
        // echo $this->db->getLastQuery();
        // die();
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getAlbId($photo_id)
    {
        $builder = $this->db->table('photos');
        $builder->select('album_id');
        $builder->where('photo_id', $photo_id);
        $query = $builder->get();
        return $query->getResult();
    }

    public function latestPhoto($id)
    {
        $builder = $this->db->table('photos');
        $builder->where('album_id', $id);
        $builder->limit(1);
        $builder->orderBy('created_at', 'DESC');
        $query = $builder->get();
        return $query->getRow();
    }

    public function like_photo($data_like)
    {
        $builder = $this->db->table('likes');
        $query = $builder->insert($data_like);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function unlike_photo($user_id, $photo_id)
    {
        $builder = $this->db->table('likes');
        $builder->where('user_id', $user_id);
        $builder->where('photo_id', $photo_id);
        $query = $builder->delete();
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function like_exist($user_id, $photo_id)
    {
        $builder = $this->db->table('likes');
        $builder->where('user_id', $user_id);
        $builder->where('photo_id', $photo_id);
        $query = $builder->countAllResults();
        // echo $this->db->getLastQuery();
        // die();
        return $query;
    }

    public function getAllPhoto($id)
    {
        $builder = $this->db->table('photos');
        $builder->where('user_id', $id);
        $builder->orderBy('created_at', 'DESC');
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        // die();
        return $query->getResult();
    }

    public function countAllPhoto($id, $album_id = '')
    {
        $builder = $this->db->table('photos');
        $builder->where('user_id', $id);
        if (!empty($album_id)) {
            $builder->where('album_id', $album_id);
        }
        return $builder->countAllResults();
    }

    public function getPhotosByAlbum($album_id)
    {
        $builder = $this->db->table('photos');
        $builder->select('photo_id, photo_title, photo_desc, photo_url, created_at');
        $builder->where('album_id', $album_id);
        // $builder->where('album_id', $user_id);
        $builder->orderBy('created_at', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getLikedPhotos($user_id)
    {
        $builder = $this->db->table('likes');
        $builder->join('photos', 'likes.photo_id = photos.photo_id'); 
        $builder->where('likes.user_id', $user_id);
        $builder->orderBy('likes.created_at', 'DESC');
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        // die();
        return $query->getResult();
    }

    // NEWEST
    
}
