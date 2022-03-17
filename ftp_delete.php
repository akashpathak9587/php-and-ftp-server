<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | ftp_delete() function</title>
</head>
<body>
<?php
// The ftp_delete() function is an inbuilt function in PHP which is used to delete a file on the FTP server.
// Syntax: ftp_delete( $ftp_connection, $file )

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
        if (ftp_delete($ftp_connection, $file)) {
            echo "$file deleted successfully on server<br>";
        } else {
            echo "There is an error in deleting $file<br>";
        }
    }
    if (ftp_close($ftp_connection)) {
        echo "Connection closed successfully";
    }
}

$file = "uploadedfile_name_in_server.txt"

?>
</body>
</html>