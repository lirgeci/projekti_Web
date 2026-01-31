<?php
session_start();

session_unset();      // fshin krejt variablat e session-it
session_destroy();   // shkatrron session-in komplet

// Delete the session cookie
if (isset($_COOKIE['PHPSESSID'])) {
    setcookie('PHPSESSID', '', time() - 3600, '/');
}
if (isset($_COOKIE['user_role'])) {
    setcookie('user_role', '', time() - 3600, '/');
}

header("Location: index.php"); // ku don me e kthy user-in
exit();