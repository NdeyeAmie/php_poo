<?php
// session_start();
session_unset();
session_destroy();
header('Location:/gestion_stock_xarala/view/auth/login.php')
?>