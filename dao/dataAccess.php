<?php
class DataAccess {
protected static $db = false; //przechowuje uchwyt do bazy danych
protected $result; //przechowuje wynik zapytania

//Konstruktor
function __construct() {
}

public static function connect($config){
  try {
    if(!self::$db){
      $con = new PDO("mysql:host={$config['server']};dbname={$config['dbname']}", $config['dbuser'], $config['dbpass']);
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      self::$db = $con;
    }
  } catch (\PDOException $e) {
    echo $e->getMessage();
      exit;
  }
  return self::$db;
}

public static function getDb(){
  return self::$db;
}

//Metoda fetch
function fetch($sql) {
  $this->result = $this->db->query($sql);
}
//Metoda getRow
function getRow () {
 if ( $row=$this->result->fetch() ) { return $row; } else { return false; }
}
function __destruct() { $this->db = false; }
} //koniec klasy DataAccess
