<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | ftp_exec() function</title>
</head>
<body>
<?php
// The ftp_exec() function is an inbuilt function in PHP that is used to execute a command on the FTP server.
// Syntax: ftp_exec($ftp_connection, $command)

$ftp_server = "ftpupload.net";
$ftp_username = "epiz_31309686";
$ftp_userpass = "Akash123ftp";
$command = "ls-al > test.txt";

$ftp_connection = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
if ($ftp_connection) {
    echo "Successfully connected to the ftp server!<br>";

    $login = ftp_login($ftp_connection, $ftp_username, $ftp_userpass);

    if ($login) {
        echo "logged in successfully<br>";
        if (ftp_exec($ftp_connection, $command)) {
            echo "<br>$command has been successfully executed";
        } else {
            echo "<br>Error while executing the the command";
        }
    }
    if (ftp_close($ftp_connection)) {
        echo "<br>Connection closed successfully";
    }
}

?>
</body>
</html>