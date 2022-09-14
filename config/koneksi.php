<?php

	error_reporting(0); 
	date_default_timezone_set('Asia/Jakarta');
	
	
    define("DB_HOST1", "localhost");
    define("DB_USER1", "root");
    define("DB_PASSWORD1", "");
    define("DB_DATABASE1", "multi");

    $koneksi1 = mysqli_connect(DB_HOST1, DB_USER1, DB_PASSWORD1, DB_DATABASE1);

    define("DB_HOST2", "localhost");
    define("DB_USER2", "root");
    define("DB_PASSWORD2", "");
    define("DB_DATABASE2", "server_email");

    $koneksi2 = mysqli_connect(DB_HOST2, DB_USER2, DB_PASSWORD2, DB_DATABASE2);
   
?>