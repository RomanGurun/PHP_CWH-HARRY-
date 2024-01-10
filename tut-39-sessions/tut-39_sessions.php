<?php

// what is a session?
// Used to manage information across different pages

// Always put session start in top position.

// verify the user login info
session_start();
$_SESSION['username']="Harry";
$_SESSION['favCat']="Books";
echo"We have saved your session";








?>