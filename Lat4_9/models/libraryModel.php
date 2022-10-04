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
            if ($result->num_rows === 0) {
                return false;
            } else {
                return $result->fetch_assoc();
            }
        } else {
            $query = "SELECT * FROM book";
            $result = $this->connection->query($query);
            if ($result->num_rows === 0) {
                return false;
            } else {
                while ($row = $result->fetch_assoc()) {
                    $result[] = $row;
                }

                return $result;
            }
        }
    }
}
