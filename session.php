<?php
//mulai session

session_start();

//membuat session

$_SESSION['npm'] = 2226250065;
$_SESSION['nama'] = "Jamal";
$_SESSION['login'] = true;

// cara panggil session

echo $_SESSION['npm'];