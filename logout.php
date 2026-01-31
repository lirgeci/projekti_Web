<?php
session_start();

session_unset();      // fshin krejt variablat e session-it
session_destroy();   // shkatërron session-in komplet

// Delete the session cookie
if (isset($_COOKIE['PHPSESSID'])) {
    setcookie('PHPSESSID', '', time() - 3600, '/');
}

header("Location: index.php"); // ku don me e kthy user-in
exit();