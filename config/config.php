<?php

    $mysqli = new mysqli("mysql5031.site4now.net","a7aa2a_hoangca","hoang2001","db_a7aa2a_hoangca");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
?>