<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to a login page or any other page as needed
header("Location: login.php");
exit();
