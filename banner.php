<?php

	ini_set("memory_limit","32M");
	ini_set("max_execution_time","300");
	ini_set("mysql.connect_timeout","90");
	date_default_timezone_set("America/Sao_Paulo");

?>
<?php

	if ( (isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"") == "http://localhost/" ) {
		if ( $index_id = addslashes($_GET['id']) ) {
			
			// conection mysql
			
			$hostname = "localhost";
			$username = "root";
			$password = "";
			$database = "local";
			$connection = mysqli_connect($hostname,$username,$password);
			$database_selected = mysqli_select_db($connection,$database);
			
			if ( $database_selected ) {
				
				// open url
				
				$open_query = mysqli_query($connection,"SELECT * FROM url_banner WHERE id='$index_id'");
				$row_query = mysqli_fetch_array($open_query);
				header("location: ".$row_query['url']);
				
				// insert ip
				
				$host_ip = $_SERVER['REMOTE_ADDR'];
				$host_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
				$host_href = getenv('REQUEST_URI');
				$host_time = date("H:i:s");
				$host_date = date("Y/m/d");
				mysqli_query($connection,"INSERT INTO click (id,ip,host,href,time,date) VALUES ('$index_id','$host_ip','$host_host','$host_href','$host_time','$host_date')");
				
			}
			
			// close mysql
			
			mysqli_close($connection);
			
		} else {
			
			// else id
			
			exit( header("location: http://log.earnmoneyclicking.com/?site=earnmoneyclicking&log=id_banner") );
			
		}
	} else {
		
		// else http
		
		exit( header("location: http://log.earnmoneyclicking.com/?site=earnmoneyclicking&log=http_banner") );
		
	}
	
?>