<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["useruid"]);
unset($_SESSION["usersName"]);
header("Location: ../index.php?error=logout");
?>