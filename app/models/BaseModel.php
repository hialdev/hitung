<?php 

class BaseModel{
    public $db;
    protected $table;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $query = "SELECT * FROM ".$this->table;
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getOrderBy($key)
    {
        $query = "SELECT * FROM ". $this->table . "ORDER BY ". $key . ' DESC';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getOrderByLimit($key,$limit)
    {
        $query = "SELECT * FROM ". $this->table . " ORDER BY ". $key . " DESC LIMIT :limit";
        $this->db->query($query);
        $this->db->bind('limit',$limit);
        return $this->db->resultSet();
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM ". $this->table ." WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function getBy($key,$data)
    {
        $query = "SELECT * FROM ". $this->table ." WHERE ".$key."=:data";
        $this->db->query($query);
        $this->db->bind('data', $data);
        return $this->db->resultSet();
    }
    public function getByFirst($key,$data)
    {
        $query = "SELECT * FROM ". $this->table ." WHERE ".$key."=:data";
        $this->db->query($query);
        $this->db->bind('data', $data);
        return $this->db->single();
    }
}