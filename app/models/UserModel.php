<?php 
require_once('BaseModel.php');

class UserModel extends BaseModel{

    protected $table = "user";

    public function add($data)
    {
        $query = "INSERT INTO user
                    VALUES
                  ('', :nama, :username, :email, :pwd, :img, :role, :crtd, :updt)";
        $timestamp = date("Y-m-d H:i:s");  
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pwd', $data['password']);
        $this->db->bind('img', (isset($data['image'])?$data['image']:"img/userimage.jpg"));
        $this->db->bind('role', $data['role']);
        $this->db->bind('crtd',$timestamp);
        $this->db->bind('updt',$timestamp);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE user SET
                  nama = :nama,
                  email = :email,
                  password = :pwd, 
                  image = :img,
                  updated_at = :updt
                  WHERE id = :id";
        $timestamp = date("Y-m-d H:i:s");;   
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pwd', (isset($data['newpassword'])?$data['newpassword']:$data['password']));
        $this->db->bind('img', (isset($data['image'])?$data['image']:BASEURL."/img/userimage.jpg"));
        $this->db->bind('id',$data['id']);
        $this->db->bind('updt',$timestamp);
        $this->db->execute();

        return $this->db->rowCount();
    }
}