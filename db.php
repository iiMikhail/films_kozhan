<?php 

function db_connect() {
	$link = mysqli_connect(SERVER_NAME, USER_NAME, USER_PASSWORD, BD_NAME);
	if( mysqli_connect_error() ) {
		die( "Ошибка подключения к базе данных" );
	}
	 // if( !mysqli_set_charser( $link, "utf8_general_ci" ) ) {
	 // 	printf("Error: " . mysqli_error($link) );
	 // }
	 return $link;
 }


?>