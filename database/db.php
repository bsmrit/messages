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

    function getMessages() {
        $connection = getConnection();

        $query = 'SELECT body FROM messages';
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

    }

?>