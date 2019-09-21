<?php

session_start();

require 'functions.php';

// destroy anything in the session
session_destroy();

header('Location: index.php');
exit;

?>