<?php

// Mysqli
$mysqli = mysqli_connect(
        $mysql['host'],
        $mysql['user'],
        $mysql['pass'],
        $mysql['db']
    );

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL (mysqli): " . mysqli_connect_error();
}
