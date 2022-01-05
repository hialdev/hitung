<?php 
require_once('BaseModel.php');

class BelajarModel extends BaseModel{

    protected $table = "belajar";

    public function add($data)
    {
        $query = "INSERT INTO ".$this->table."
                    VALUES
                  ('', :title, :thumbnail, :excerpt, :body, :slug, :crtd, :updt)";
        $timestamp = date("Y-m-d H:i:s");
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('thumbnail', $data['thumbnail']);
        $this->db->bind('excerpt', $data['excerpt']);
        $this->db->bind('body', $data['body']);
        $this->db->bind('slug', $data['slug']);
        $this->db->bind('crtd',$timestamp);
        $this->db->bind('updt',$timestamp);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE ".$this->table." SET
                  title = :title,
                  thumbnail = :thumbnail,
                  excerpt = :excerpt,
                  body = :body,
                  slug = :slug,
                  updated_at = :updt 
                  WHERE id = :id";

        $timestamp = date("Y-m-d H:i:s");
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('thumbnail', (isset($data['thumbnail']))?$data['thumbnail']:$data['oldthumbnail']);
        $this->db->bind('excerpt', $data['excerpt']);
        $this->db->bind('body', $data['body']);
        $this->db->bind('slug', $data['slug']);
        $this->db->bind('updt',$timestamp);
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