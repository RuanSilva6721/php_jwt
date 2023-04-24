<?php
namespace Ruan\PhpJwt;
use PDO;

class Connection {

    public function connect(){
        return new PDO("mysql:dbname=php_jwt;host=localhost", "root", "",[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);

    }
    
}