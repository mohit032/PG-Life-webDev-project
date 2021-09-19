<?php
$conn = mysqli_connect("18.217.248.122", "root", "root", "PG_Life");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
