<?php
DATE_DEFAULT_TIMEZONE_SET('AFRICA/DAR_ES_SALAAM');
require('koneksi.php');

session_start();
$_SESSION = ["user"];
session_unset();
session_destroy();
// Session dihapus dan logout

header('location: index.php');
    // kembali ke index.php