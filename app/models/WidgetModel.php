<?php 
require_once('BaseModel.php');

class WidgetModel extends BaseModel{

    protected $table = "widget";

    public function add($data)
    {
        $query = "INSERT INTO ".$this->table."
                    VALUES
                  ('', :title, :icon, :action, :url, :role)";
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('icon', $data['icon']);
        $this->db->bind('action', $data['action']);
        $this->db->bind('url', $data['url']);
        $this->db->bind('role', $data['role']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE ".$this->table." SET
                  title = :title,
                  icon = :icon,
                  action = :action,
                  url = :url,
                  role = :role
                  WHERE id = :id";
        $timestamp = date("Y-m-d H:i:s");;   
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('icon', $data['icon']);
        $this->db->bind('action', $data['action']);
        $this->db->bind('url', $data['url']);
        $this->db->bind('role', $data['role']);
        $this->db->bind('id',$data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($id)
    {
        $query = "DELETE FROM ".$this->table." WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}