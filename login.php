<?php
session_start();
$code = ($_POST['accessCode'] ?? $_REQUEST['accessCode']) ?? '';
if (trim(strtolower($code)) == 'wg7-2') {
    $_SESSION['authenticated'] = true;
}
header('location:/');