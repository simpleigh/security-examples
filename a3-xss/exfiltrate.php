<?php

session_start();

header('Content-Type: text/plain');

// Store data we're provided
if (array_key_exists('data', $_GET)) {
    $_SESSION['data'] = $_GET['data'];
}

// Repeat data we've been given
if (array_key_exists('data', $_SESSION)) {
    echo $_SESSION['data'];
}
