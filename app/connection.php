<?php

$database = new mysqli('p:db', 'root','', 'edoc');
if ($database->connect_error) {
    die("Connection failed:  " . $database->connect_error);
}

?>