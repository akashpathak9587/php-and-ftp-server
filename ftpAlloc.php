<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | ftp_alloc() function</title>
</head>
<body>
<?php
// The ftp_alloc() function is an inbuilt function in PHP which is used to allocate space for file to be uploaded in FTP server.
// Syntax: ftp_alloc($ftp_connection, $filesize, $result);

$ftp_server = "ftpupload.net";
$ftp_username = "epiz_31309686";
$ftp_userpass = "Akash123ftp";
$file = "fileupload.txt";

$ftp_connection = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
if ($ftp_connection) {
    echo "Successfully connected to the ftp server!<br>";

    $login = ftp_login($ftp_connection, $ftp_username, $ftp_userpass);

    if ($login) {
        echo "logged in successfully<br>";
        if (ftp_alloc($ftp_connection, filesize($file), $result)) {
            echo "space successfully allocated on the FTP server<br>";

            if (ftp_put($ftp_connection, "uploadedfile_name_in_server.txt", $file, FTP_ASCII)) {
                echo "uploaded successfully $file<br>";
            } else {
                echo "Error while uploading $file.<br>";
            }
        } else {
            echo "space allocation failed.<br>";
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