<?php
session_start();
//unsetting all pertinent details without destroying the session.
unset($_SESSION['fname']);
unset($_SESSION['disc1']);
unset($_SESSION['disc2']);
unset($_SESSION['disc3']);
unset($_SESSION['percent1']);
unset($_SESSION['percent2']);
unset($_SESSION['percent3']);
$_SESSION['guest'] = 'done';
header('location: home.php');
?>