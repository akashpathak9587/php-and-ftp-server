<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | ftp_get() function</title>
</head>
<body>
<?php
// The ftp_get() function is an inbuilt function in PHP which is used to get or download files from FTP server to local server or machine.
// Syntax:ftp_get($ftp_connection, $local_file_path, $server_file_path, $mode_of_file_transfer, $starting_position);

$ftp_server = "ftpupload.net";
$ftp_username = "epiz_31309686";
$ftp_userpass = "Akash123ftp";

$ftp_connection = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
if ($ftp_connection) {
    echo "Successfully connected to the ftp server!<br>";

    $login = ftp_login($ftp_connection, $ftp_username, $ftp_userpass);

    if ($login) {
        echo "logged in successfully<br>";
        $local_file = "local_file.txt";
        $server_file = "server_file.txt";
        if (ftp_get($ftp_connection, $local_file, $server_file, FTP_BINARY)) {
            echo "<br>Successfully downloded from the $server_file to $local_file";
        } else {
            echo "Error while downloading from $server_file to $binary_file.";
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