<?php
    function showView() { //GET REQUEST for viewMessages.php
        // prepare the data for the view page
        $records = getMessages();

        // load the view page
        require 'pages/viewMessages.php';
    }

    function showInsertForm() { //GET REQUEST for insertMessages.php
        // no data to prepare

        // load the view page
        require 'pages/insertMessage.php';
    }

    function handleInsertForm() {
        // handle the data
        $message = $_POST['message'];
        insertMessage($message);

        // redirect to the next view
        header('location: index.php?page=view');

    }

    function showEditForm($id) {
        // get the data
        $record = getMessage($id);

        // load the edit page
        require 'pages/editMessage.php';
    }

    function handleEditForm() {

    }