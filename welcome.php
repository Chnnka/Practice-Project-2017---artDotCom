<?php
session_start();
echo 'Welcome',$_SESSION['Full Name'];
echo '<br><a href="index.php?action=logout">Log out</a>';

?>