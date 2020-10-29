<?php

class DB {

    public $db;

    public function __construct() {
        $this->db = new SQLite3("htc_project.db");
    }

    // Взять фигуры
    public function getFigures() {
        $query = 'SELECT * FROM figures';
        $result = $this->db->query($query);
        if ($result) {
            $array = [];
            while ($row = $result->fetchArray()) {
                $array[] = $row;
            }
            return $array;
        }
        return null;
    }

    // Взять параметры фигуры
    public function getParams($idFigure) {
        $query = "SELECT type, value FROM params WHERE id_figure = $idFigure";
        $result = $this->db->query($query);
        if ($result) {
            $array = [];
            while ($row = $result->fetchArray()) {
                $array[] = $row;
            }
            return $array;
        }
        return null;
    }

    // Взять точку по параметру
    public function getPoint($value) {
        $query = "SELECT x, y FROM points WHERE id = $value";
        $result = $this->db->query($query)->fetchArray();
        if ($result) {
            return $result;
        }
        return null;
    }

    // Добавить фигуру
    public function addFigure($type) {
        $query = "INSERT INTO figures (type) VALUES ('$type')";
        $this->db->exec($query);
    }

    // Добавить параметр
    public function addParam($id, $param, $value) {
        print_r($param);
        $query = "INSERT INTO params (id_figure, type, value) VALUES ('$id', '$param', '$value')";
        $this->db->exec($query);
    }

    // Добавить точку
    public function addPoint($x, $y) {
        $query = "INSERT INTO points (x, y) VALUES ('$x', '$y')";
        $this->db->exec($query);
    } 

    // Взять последнюю запись таблицы
    public function getLastEntry($table) {
        $query = "SELECT * FROM $table ORDER BY id DESC LIMIT 1;";
        $result = $this->db->query($query)->fetchArray();
        if ($result) {
            return $result;
        }
        return null;
    }

}