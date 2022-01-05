<?php 
require_once('BaseModel.php');

class SoalModel extends BaseModel{

    protected $table = "soal";

    public function topik()
    {
        $query = "SELECT topik FROM ".$this->table." GROUP BY topik";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getSoal($jenis,$topik)
    {
        $query = "SELECT * FROM ".$this->table." WHERE jenis=:jenis AND topik=:topik";
        $this->db->query($query);
        $this->db->bind('jenis',$jenis);
        $this->db->bind('topik',$topik);
        return $this->db->resultSet();
    }

    public function add($data)
    {
        $query = "INSERT INTO ".$this->table."
                    VALUES
                  ('', :jenis, :topik, :soal, :jawaban, :crtd, :updt)";
        $timestamp = date("Y-m-d H:i:s");
        $this->db->query($query);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('topik', $data['topik']);
        $this->db->bind('soal', $data['soal']);
        $this->db->bind('jawaban', $data['jawaban']);
        $this->db->bind('crtd',$timestamp);
        $this->db->bind('updt',$timestamp);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE ".$this->table." SET
                  jenis = :jenis,
                  topik = :topik,
                  soal = :soal,
                  jawaban = :jawaban,
                  updated_at = :updt 
                  WHERE id = :id";
        $timestamp = date("Y-m-d H:i:s");;   
        $this->db->query($query);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('topik', $data['topik']);
        $this->db->bind('soal', $data['soal']);
        $this->db->bind('jawaban', $data['jawaban']);
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