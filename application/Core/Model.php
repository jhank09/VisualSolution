<?php

namespace Mini\Core;

use PDO;

class Model
{
 
    public $db = null;

  
    function __construct()
    {
        try {
            self::openDatabaseConnection();
        } catch (\PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    
    private function openDatabaseConnection()
    {
      
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        
        // setting the encoding is different when using PostgreSQL
        if (DB_TYPE == "pgsql") {
            $databaseEncodingenc = " options='--client_encoding=" . DB_CHARSET . "'";
        } else {
            $databaseEncodingenc = "; charset=" . DB_CHARSET;
        }

        // generate a database connection, using the PDO connector
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . $databaseEncodingenc, DB_USER, DB_PASS, $options);
    }
}
