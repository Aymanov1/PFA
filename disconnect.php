<?php
session_start();
unset($_SESSION);
session_destroy();
header("location:".'index.php');
require_once 'prepend.inc.php';

