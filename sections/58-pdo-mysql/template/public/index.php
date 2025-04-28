<?php

require_once __DIR__ . '/../vendor/autoload.php';

Dotenv\Dotenv::createImmutable(__DIR__ . '/../')->load();

//var_dump($_ENV);

try {

  $dns = 'mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME'].';charset=utf8mb4';
  $db = new PDO($dns,$_ENV['DB_USER'],$_ENV['DB_PASS']);
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  var_dump('Connessione Ok!');

  /*$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER(9) PRIMARY KEY AUTO_INCREMENT,
    account VARCHAR(128) UNIQUE NOT NULL
  )");
  var_dump('Creazione/Esistenza tabella Ok!');*/

  /*$db->exec("INSERT INTO users (account) VALUES ('Zavy')");
  var_dump('Inserimento record Ok!');*/

  /*$db->exec("INSERT INTO users (account) VALUES ('Alicina91')");
  var_dump('Inserimento record Ok!');*/

  /*$db->exec("UPDATE users SET account='Zavy86' WHERE id=1");
  var_dump('Aggiornamento dati Ok!');*/

  /*$db->exec("DELETE FROM users WHERE id=3");
  var_dump('Eliminazione dati Ok!');*/

  /*$statement = $db->query("SELECT * FROM users");
  var_dump('Estrazione Ok!');
  $results = $statement->fetchAll(PDO::FETCH_OBJ);
  var_dump($results);*/

}catch(PDOException $exception){
  echo $exception->getMessage();
}
