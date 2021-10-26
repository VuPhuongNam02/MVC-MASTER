<?php
class User{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUser(){
        $sql = "SELECT * FROM tbl_user";
        $result = $this->db->select($sql);
        return $result;
    }
}

?>