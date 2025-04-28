<?php

try {

  $db = new PDO('sqlite:../storage/database.sqlite');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  var_dump('Connessione Ok!');

  /*$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    account TEXT UNIQUE NOT NULL
  )");
  var_dump('Creazione/Esistenza tabella Ok!');*/

  /*$db->exec("INSERT INTO users (account) VALUES ('Zavy86')");
  var_dump('Inserimento record Ok!');*/

  /*$db->exec("INSERT INTO users (account) VALUES ('Alicina91')");
  var_dump('Inserimento record Ok!');*/

  /*$statement = $db->query("SELECT * FROM users");
  var_dump('Estrazione Ok!');
  $results = $statement->fetchAll(PDO::FETCH_OBJ);
  var_dump($results);*/

}catch(PDOException $exception){
  echo $exception->getMessage();
}
