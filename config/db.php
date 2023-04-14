<?php

class Database{
    public static function connect(){
        $db = new mysqli('localhost', 'root', '', 'tienda_master', '3308');
        $db->query("SET NAMES 'utf-8");
        return $db;
    }
}