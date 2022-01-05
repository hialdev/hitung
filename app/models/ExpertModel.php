<?php 
require_once('BaseModel.php');

class ExpertModel extends BaseModel{

    protected $table = "expert";

    public function add($data)
    {
        $query = "INSERT INTO ".$this->table."
                    VALUES
                  ('', :username, :whatsapp, :specialist)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('whatsapp', $data['whatsapp']);
        $this->db->bind('specialist', $data['specialist']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE ".$this->table." SET
                  whatsapp = :whatsapp,
                  specialist = :specialist 
                  WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('whatsapp', $data['whatsapp']);
        $this->db->bind('specialist', $data['specialist']);
        $this->db->bind('username',$data['username']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}