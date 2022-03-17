<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | ftp_mdtm() Function</title>
</head>
<body>
<?php
// The ftp_mdtm() function is an inbuilt function in PHP which is used to get time when the file on FTP server was last modified.
// Syntax: ftp_mdtm( $ftp_connection, $file )

$ftp_server = "ftpupload.net";
$ftp_username = "epiz_31309686";
$ftp_userpass = "Akash123ftp";
$file = "uploadedfile_name_in_server.txt";

$ftp_connection = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
if ($ftp_connection) {
    echo "Successfully connected to the ftp server!<br>";
    $login = ftp_login($ftp_connection, $ftp_username, $ftp_userpass);

    if ($login) {
        echo "logged in successfully<br>";
        $last_mod = ftp_mdtm($ftp_connection, $file);
        if ($last_mod != -1) {
            echo "<br> $file was modified on " . date("F d Y H:i:s.", $last_mod) . ".";
        } else {
            echo "<br>Could not get last modified";
        }
    } else {
        echo "<br>Login Failed";
    }
    if (ftp_close($ftp_connection)) {
        echo "<br>Connection closed successfully";
    }
}

?>
</body>
</html>