<?php
session_start();
unset ($_SESSION['img']);
unset($_SESSION['logged_user']); header('location:thanks.php');