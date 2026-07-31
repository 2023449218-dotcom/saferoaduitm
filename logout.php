<?php

/* Start the current session */
session_start();

/* Destroy all session data */
session_destroy();

/* Redirect user to the login page */
header("Location: index.php");

/* Stop further script execution */
exit();

?>