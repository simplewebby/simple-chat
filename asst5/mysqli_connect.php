<?php # Script 9.2 - mysqli_connect.php
	
	 // This file contains the database access information.
	 // This file also establishes a connection to MySQL,
	 // selects the database, and sets the encoding.
	
	 // Set the database access information as constants:
	 DEFINE ('DB_USER', 'tg276');
	 DEFINE ('DB_PASSWORD', 'your password');
	 DEFINE ('DB_HOST', 'sql2.njit.edu');
     DEFINE ('DB_NAME', 'tg276');
     
     // Set the database access information as constants:
	//  DEFINE ('DB_USER', 'root');
	//  DEFINE ('DB_PASSWORD', 'root');
	//  DEFINE ('DB_HOST', '127.0.0.1');
    //  DEFINE ('DB_NAME', 'club');
     
    
	
	 // Make the connection:
	 $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error( ) );
	
	 // Set the encoding...
	 mysqli_set_charset($dbc, 'utf8');