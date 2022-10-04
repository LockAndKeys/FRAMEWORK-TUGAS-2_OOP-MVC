<?php

class LibraryModel
{
    private $connection;

    function __construct()
    {
        $this->connection = new mysqli(
            'localhost',
            'root',
            '',
            'library'
        );
    }

    public function getLibrary($id = 1)
    {
        if ($id) {
            $query = "SELECT * FROM book WHERE id = $id";
            $result = $this->connection->query($query);
            return $result;
        }
    }
}
