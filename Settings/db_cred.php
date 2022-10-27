
<?php
//Database credentials
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'shoppn');


define('DB_SERVER', 'us-cdbr-east-06.cleardb.net');
define('DB_USERNAME', 'b81c68999b6f3e');
define('DB_PASSWORD', '7c7acb76');
define('DB_NAME', 'heroku_03bf4a52f0206ba');

mysql://b81c68999b6f3e:7c7acb76@us-cdbr-east-06.cleardb.net/heroku_03bf4a52f0206ba?reconnect=true
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>