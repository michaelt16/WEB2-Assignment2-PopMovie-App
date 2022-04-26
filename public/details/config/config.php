<?php

return [
  "database" => [
    "host" => $_ENV['DB_HOST'] ?? "34.130.174.43",
    "db" => $_ENV['DB_NAME'] ?? "movies",
    "user" => $_ENV['DB_USER'] ?? "root",
    "password" => $_ENV['DB_PASSWORD'] ?? "wHxtgPuczlgotII"
  ]
];