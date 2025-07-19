<?php

// Abstraction is our interface
interface DBConnectionInterface
{
    public function connect();
}

// lower level module implements the abstraction - interface
class MySQLConnection implements DBConnectionInterface
{
    public function connect()
    {
        return 'MySQL Database connection established.';
    }
}

// lower level module implements the abstraction - interface
class PostgreSQLConnection implements DBConnectionInterface
{
    public function connect()
    {
        return 'PostgreSQL Database connection established.';
    }
}

// higher level module accepts the abstraction - interface
class PasswordReminder
{
    public $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection) // Type-hinting the interface
    {
        $this->dbConnection = $dbConnection;
    }

    public function remind()
    {
        $connectionStatus = $this->dbConnection->connect();
        return "Password reminder process initiated. Connection status: " . $connectionStatus;
    }
}

// Create a concrete MySQL connection object
$mysqlConnector = new MySQLConnection();

// Inject the concrete MySQL connection object into the PasswordReminder
// The PasswordReminder only sees it as a DBConnectionInterface
$passwordReminder = new PasswordReminder($mysqlConnector);

echo $passwordReminder->remind(); // Output: Password reminder process initiated. Connection status: MySQL Database connection established.

$pgConnector = new PostgreSQLConnection();
$passwordReminder = new PasswordReminder($pgConnector);

echo $passwordReminder->remind();