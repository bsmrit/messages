<?php
/**
 * Created by PhpStorm.
 * User: benjaminstevens
 * Date: 4/5/18
 * Time: 7:31 PM
 */

    // this is out data layer!

    function getConnection() {
        $user = 'bsteven1_dummy';
        $pass = 'EK]e&cdC#ro@';
        $host = 'localhost';
        $database = 'bsteven1_IT328';

        $connection = mysqli_connect($host, $user, $pass, $database);

        // if we got false, something went wrong
        if (!$connection) {
            echo 'Error connecting to DB: '.mysqli_connect_error();
            exit;
        }

        return $connection;
    }

    function getMessage($id) {
        $connection = getConnection();

        $query = "SELECT body FROM messages WHERE id='$id'";
        $results = mysqli_query($connection, $query);

        if (!$results) {
            echo 'Error retrieving records.';
            exit;
        }

        $record = mysqli_fetch_assoc($results);
        return $record;
    }

    function editMessage($id, $message) {
        $connection = getConnection();

        // PUT THE UPDATE QUERY HERE!!!
    }

    function getMessages() {
        $connection = getConnection();

        $query = 'SELECT id, body FROM messages';
        $results = mysqli_query($connection, $query);

        if (!$results) {
            echo 'Error retrieving records.';
            exit;
        }

        $records = array();
        while ($row = mysqli_fetch_assoc($results)) {
            $records[] = $row;
        }

        //free up server resources
        mysqli_free_result($results);

        return $records;
    }

    function insertMessage($message) {
        $connection = getConnection();

        $query = "INSERT INTO messages (body) VALUES ('$message')";
        return mysqli_query($connection, $query);
    }

?>