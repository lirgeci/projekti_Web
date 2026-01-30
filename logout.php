<?php
session_start();

session_unset();      // fshin krejt variablat e session-it
session_destroy();   // shkatërron session-in komplet

header("Location: index.php"); // ku don me e kthy user-in
exit();