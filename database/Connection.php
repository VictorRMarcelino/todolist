<?php

namespace database;

/**
 * Connection
 * @package database
 * @author  VictorRamos <httpsvictorramos@gmail.com>
 * @since   18/04/2025
 */
class Connection {

    private $conn;

    /**
     * Get the static instance of Connection
     * @return Connection
     */
    public static function getInstance() {
        static $instance = null;

        if (!isset($instance)) {
            $instance = new Connection();
        }

        return $instance;
    }

    /**
     * Connect with the database
     * @return void
     */
    private function connect() {
        try {
            $sHost = getenv("DB_HOST");
            $iPort = getenv("DB_PORT");
            $sDbName = getenv("DB_DBNAME");
            $sUsername = getenv("DB_USER");
            $sPassword = getenv("DB_PASSWORD");
            $sDsn = "pgsql:host=$sHost;port=$iPort;dbname=$sDbName";
            $this->conn = new \PDO($sDsn, $sUsername,$sPassword);
        } catch (\PDOException $e) {}
    }
}