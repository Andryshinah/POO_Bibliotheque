<?php
abstract class Model
{
    private static $pdo;

    private static $instance;
    private const user = 'root';
    private const password = '';

    private static function setBdd()
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=biblio2';
        self::$pdo=new PDO($dsn,self::user,self::password);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                
    }
        
        
    protected static function getBdd()
    {
            if(self::$pdo === null)
            {
                    self::setBdd();
            }
            return self::$pdo;
    }
        

    }

?>