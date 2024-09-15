<?php
session_start();
// Unset all session variables
$_SESSION = array();
// Delete the session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}



if (isset($_COOKIE['user_id'])) {
    setcookie('user_id', '', time() - 3600, '/');
}
$_SESSION['logout-success'] = 'You have been logged out.';
session_destroy();
header('Location: index.php');