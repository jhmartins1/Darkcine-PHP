<?php

class Conexao{
  public static function criar():PDO{
    $env = parse_ini_file('.env');
    $server = $env["server"];
    $database = $env["database"];
    $databaseType = $env["databasetype"];
    $user = $env["user"];
    $password = $env["password"];

    if($databaseType === "mysql"){
      $database = "host=$server;dbname=$database";
    }

    return new PDO("$databaseType:$database", $user, $password);
  }
}