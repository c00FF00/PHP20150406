<?php

require __DIR__ . '/../classes/Db.php';

class News {

    protected $db;

    public function __construct() {
        $this->db = new Db();
    }

    public function GetAllSubject() {
        $items = ['id', 'date', 'author', 'subject'];
        return $this->db->dbSelectByFolder('main', $items, 'ORDER BY DATE DESC');
    }

    public function GetOneNew($id) {
        $items = ['id', 'date', 'author', 'subject', 'bodynews'];
        $onenew = $this->db->dbSelectByFolder('main', $items, "WHERE id = " . $id);
        return $onenew[0];
    }

    public function InsertNew($table, $items) {
        $this->db->dbInsertRecord($table, $items);
    }
}