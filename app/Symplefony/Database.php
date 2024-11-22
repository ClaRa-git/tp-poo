<?php

namespace Symplefony;

use Exception;

class Database
{
    private static ?self $db_instance = null;

    public static function getDd(): self
    {
        if( is_null( self::$db_instance ) ) {
            self::$db_instance = new self();
        }
        
        return self::$db_instance;
    }
    
    private function __construct() { }
    private function __clone() { }
    public function __wakeup()
    {
        throw new Exception( "Non c'est interdit !" );
    }
}