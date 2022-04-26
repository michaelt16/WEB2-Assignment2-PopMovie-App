<?php

class Connection
{

  public static function connect($host, $db, $user, $password)
  {
    return new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", "$user", "$password");
  }