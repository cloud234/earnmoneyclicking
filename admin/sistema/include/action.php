<?php

	ini_set("memory_limit","32M");
	ini_set("max_execution_time","300");
	ini_set("mysql.connect_timeout","90");

	session_start();

?>
<?php

	if ( (isset($_SESSION['code-key-1'])) && (isset($_SESSION['code-key-2'])) && ($_SESSION['code-key-1'] == $_SESSION['code-key-2']) ) {
	} elseif ( basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__) ) {
		exit( header("location: http://localhost/admin/logout.php") );
	}
	
?>
<?php

	if ( (isset($_SESSION['id-auth-1'])) && (isset($_SESSION['id-auth-2'])) && ($_SESSION['id-auth-1'] == $_SESSION['id-auth-2']) ) {
		if ( (isset($_SESSION['name-auth-1'])) && (isset($_SESSION['name-auth-2'])) && ($_SESSION['name-auth-1'] == $_SESSION['name-auth-2']) ) {
		} elseif ( basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__) ) {
			exit( header("location: http://localhost/admin/logout.php") );
		}
	} elseif ( basename($_SERVER['SCRIPT_FILENAME']) == basename(__FILE__) ) {
		exit( header("location: http://localhost/admin/logout.php") );
	}
	
?>
<?php

	function openIndexAction($input_url,$input_date,$hidden_index,$hidden_id,$hidden_url,$hidden_date) {
		
		// openIndexAction
		
		echo "<div style=\"width:1000px;text-align:center;margin:0 auto;\" >";
			echo "<div >";
				echo "<table style=\"width:1000px;color:#BA1E28;font-family:verdana,arial,sans-serif;font-size:14px;text-shadow:0 1px rgba(186,30,40,0.5);\" >";
					echo "<tbody style=\"text-align:center;\" >";
						echo "<tr style=\"height:50px;\" >";
							echo "<td style=\"width:200px;\" >";
								echo "<p >From:</p >";
							echo "</td >";
							echo "<td style=\"width:600px;\" >";
								echo "<p >$hidden_url</p >";
							echo "</td >";
							echo "<td style=\"width:200px;\" >";
								echo "<p >$hidden_date</p >";
							echo "</td >";
						echo "</tr >";
						echo "<tr style=\"height:50px;\" >";
							echo "<td style=\"width:200px;\" >";
								echo "<p >To:</p >";
							echo "</td >";
							echo "<td style=\"width:600px;\" >";
								echo "<p >$input_url</p >";
							echo "</td >";
							echo "<td style=\"width:200px;\" >";
								echo "<p >$input_date</p >";
							echo "</td >";
						echo "</tr >";
					echo "</tbody >";
				echo "</table >";
			echo "</div >";
			echo "<div >";
				echo "<div style=\"color:#BA1E28;font-family:verdana,arial,sans-serif;font-size:18px;text-shadow:0 1px rgba(186,30,40,0.5);\" >";
					echo "<p style=\"padding-top:10px;padding-bottom:10px;\" >Change Link</p >";
					echo "<a style=\"color:#BA1E28;margin:0 10px;\" href=\"action.php?link-confirm=yes&hidden-index=".htmlspecialchars($hidden_index)."&hidden-id=".htmlspecialchars($hidden_id)."&hidden-url=".htmlspecialchars($hidden_url)."&hidden-date=".htmlspecialchars($hidden_date)."&input-url=".htmlspecialchars($input_url)."&input-date=".htmlspecialchars($input_date)."\" >Yes</a >";
					echo "<a style=\"color:#BA1E28;margin:0 10px;\" href=\"action.php?link-confirm=no\" >No</a >";
				echo "</div >";
			echo "</div >";
		echo "</div >";
		
	}
	
	function openInsertAction($hidden_index,$hidden_id,$hidden_url,$hidden_date,$input_url,$input_date) {
		
		
		// insert url-mysql
		
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$database = "local";
		$connection = mysqli_connect($hostname,$username,$password);
		$database_selected = mysqli_select_db($connection,$database);
		if ( !$connection ) {
			echo "<p>Could not connect to MYSQL.</p>";
			echo "<p>MySQL Error: " .mysqli_connect_error()."</p>";
		}
		if ( !$database_selected ) {
			echo "<p>Could not connect to DATABASE.</p>";
			echo "<p>MySQL Error: " .mysqli_connect_error()."</p>";
		}
		
		mysqli_query($connection,"UPDATE $hidden_index SET url='$input_url',date='$input_date' WHERE id='$hidden_id'");
		mysqli_close($connection);
		
		
		// insert url-text
		
		$url_text = "../../../text/".$hidden_index."/".$hidden_id.".txt";
		$text_open = fopen($url_text,"w") or die("can't open file");
		fwrite($text_open,$input_url);
		fclose($text_open);
		
		
		// insert date-text
		
		switch ( $hidden_index ) {
			case "url_first":
				$date_index = "date_first";
			break;
			case "url_penult":
				$date_index = "date_penult";
			break;
			case "url_last":
				$date_index = "date_last";
			break;
		}
		
		$url_prev = "../../../text/".$date_index."/".$hidden_id.".txt";
		$prev_open = fopen($url_prev,"w") or die("can't open file");
		fwrite($prev_open,$input_date);
		fclose($prev_open);
		
		
		// perform redirection
		
		exit(header("location: http://localhost/admin/sistema/index.php?index-url=url_last"));
		
		
	}
	
	function prevInsertAction($hidden_id,$hidden_url,$hidden_date) {
		
		
		// insert url-mysql
		
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$database = "local";
		$connection = mysqli_connect($hostname,$username,$password);
		$database_selected = mysqli_select_db($connection,$database);
		if ( !$connection ) {
			echo "<p>Could not connect to MYSQL.</p>";
			echo "<p>MySQL Error: " .mysqli_connect_error()."</p>";
		}
		if ( !$database_selected ) {
			echo "<p>Could not connect to DATABASE.</p>";
			echo "<p>MySQL Error: " .mysqli_connect_error()."</p>";
		}
		
		mysqli_query($connection,"UPDATE url_penult SET url='$hidden_url',date='$hidden_date' WHERE id='$hidden_id'");
		mysqli_close($connection);
		
		
		// insert url-text
		
		$url_text = "../../../text/url_penult/".$hidden_id.".txt";
		$text_open = fopen($url_text,"w") or die("can't open file");
		fwrite($text_open,$hidden_url);
		fclose($text_open);
		
		
		// insert date-text
		
		$url_prev = "../../../text/date_penult/".$hidden_id.".txt";
		$prev_open = fopen($url_prev,"w") or die("can't open file");
		fwrite($prev_open,$hidden_date);
		fclose($prev_open);
		
		
	}

?>
<?php

	if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
		
		$input_url = isset($_POST['input-url']) ? $_POST['input-url'] : "";
		$input_date = isset($_POST['input-date']) ? $_POST['input-date'] : "";
		$hidden_index = isset($_POST['hidden-index']) ? $_POST['hidden-index'] : "";
		$hidden_id = isset($_POST['hidden-id']) ? $_POST['hidden-id'] : "";
		$hidden_url = isset($_POST['hidden-url']) ? $_POST['hidden-url'] : "";
		$hidden_date = isset($_POST['hidden-date']) ? $_POST['hidden-date'] : "";
		
		if ( (!empty($input_url)) && (stristr($input_url,"http")) ) {
			if ( (!empty($input_date)) && (stristr($input_date,"/")) ) {
				openIndexAction($input_url,$input_date,$hidden_index,$hidden_id,$hidden_url,$hidden_date);
			} else {
				exit(header("location: http://localhost/admin/sistema/index.php?index-url=url_last"));
			}
		} else {
			exit(header("location: http://localhost/admin/sistema/index.php?index-url=url_last"));
		}
		
	} else if ( $_SERVER['REQUEST_METHOD'] == "GET" ) {
		
		$link_confirm = isset($_GET['link-confirm']) ? $_GET['link-confirm'] : "";
		$hidden_index = isset($_GET['hidden-index']) ? $_GET['hidden-index'] : "";
		$hidden_id = isset($_GET['hidden-id']) ? $_GET['hidden-id'] : "";
		$hidden_url = isset($_GET['hidden-url']) ? $_GET['hidden-url'] : "";
		$hidden_date = isset($_GET['hidden-date']) ? $_GET['hidden-date'] : "";
		$input_url = isset($_GET['input-url']) ? $_GET['input-url'] : "";
		$input_date = isset($_GET['input-date']) ? $_GET['input-date'] : "";
		
		if ( !empty($link_confirm) ) {
			if ( $link_confirm == "yes" ) {
				if ( $hidden_index == "url_last" ) {
					prevInsertAction($hidden_id,$hidden_url,$hidden_date);
				}
				openInsertAction($hidden_index,$hidden_id,$hidden_url,$hidden_date,$input_url,$input_date);
			} elseif ( $link_confirm == "no" ) {
				exit(header("location: http://localhost/admin/sistema/index.php?index-url=url_last"));
			}
		}
		
	}

?>