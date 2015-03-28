<?php
class DB
{
    protected static $instance;
    protected static $host = '127.0.0.1';
    protected static $name = 'comments';
    protected static $user = 'root';
    protected static $pass = '';

    /**
     * Create an instance of the DB connection using the singleton pattern.
     * @return PDO Instance of the DB connection
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            try {
                self::$instance = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$name, self::$user, self::$pass);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return self::$instance;
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            return self::$instance;
        }
    }

}