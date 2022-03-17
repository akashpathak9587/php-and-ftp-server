<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | ftp_chdir() function</title>
</head>
<body>
<?php
// The ftp_close() function is an inbuilt function in PHP which is used to close the already exists FTP connection to a specified FTP server or Host.
// Syntax: ftp_close( $ftp_connection );

// The ftp_connect() function is an inbuilt function in PHP which is used to create a new connection to the specified FTP server or Host. When connection is successful then only other FTP functions can be run against the server.
// Syntax: ftp_connect($ftp_host, $ftp_port, $timeout);

// The ftp_chdir() function is an inbuilt function in PHP which is used to change the current directory on the FTP server.
// Syntax: ftp_chdir( $ftp_connection, $directory )

// The ftp_login() function is an inbuilt function in PHP which is used to login to an established FTP connection.

// Syntax: ftp_login($ftp_connection, $ftp_username, $ftp_userpass);

$ftp_server = "ftpupload.net";
$ftp_username = "epiz_31309686";
$ftp_userpass = "Akash123ftp";

$ftp_connection = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
if ($ftp_connection) {
    echo "Successfully connected to the ftp server!<br>";

    $login = ftp_login($ftp_connection, $ftp_username, $ftp_userpass);

    if ($login) {
        echo "logged in successfully<br>";
        if (ftp_chdir($ftp_connection, "htdocs")) {
            echo "<br>Current directory successfully changed to htdocs.";
        } else {
            echo "<br>Error while changing the current directory.";
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