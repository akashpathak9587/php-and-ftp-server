<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | ftp_mkdir() function</title>
</head>
<body>
<?php
// The ftp_mkdir() function is an inbuilt function in PHP which is used to create a new directory on the ftp server. Once the directory is created cannot be created again. Creating a directory that already exists will produce error.
// Syntax: string ftp_mkdir( $ftp_connection, $directory_name )

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
        $dir = "testdirectory";
        if (ftp_mkdir($ftp_connection, $dir)) {
            echo "$dir created successfully";
        } else {
            echo "<br>Error in creating $dir";
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