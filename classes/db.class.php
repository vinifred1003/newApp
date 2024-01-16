<?php

class DB

{
  public static function connect()
  {
    $host = '127.0.0.1';
    $user = 'root';
    $pass = '123456';
    $base = 'serie_login';

    return new PDO("mysql:host={$host};dbname={$base};charset=UTF8;", $user, $pass);
  }
}
