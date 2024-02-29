<?php

$database = new mysqli('p:db:3306', 'root', '', 'edoc');
if ($database->connect_error) {
    die("Connection failed:  " . $database->connect_error);
}

?>