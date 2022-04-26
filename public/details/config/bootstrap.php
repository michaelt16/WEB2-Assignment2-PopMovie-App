<?php
require "../class/Movie.php";
require "../database/Connection.php";
require "../database/QueryBuilder.php";
$config = require "config.php";
$dbConfig = $config['database'];


return new QueryBuilder(Connection::connect(
  $dbConfig['host'],
  $dbConfig['db'],
  $dbConfig['user'],
  $dbConfig['password']
));