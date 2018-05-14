<?php
//Database Connection
define('DB_HOST','localhost');
define('DB_USER','pawel');
define('DB_PASS','123');
define('DB_NAME','gallery_db');

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);

if($connection){
     echo "true";
}

?>