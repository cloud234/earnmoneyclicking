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

	function openIndexResult($index_url) {
		
		// openIndexResult
		
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
		
		echo "<div >\n";
			echo "<div style=\"text-align:center;padding-top:10px;\" >\n";
				echo "<p style=\"text-shadow:0 1px rgba(186,30,40,0.5);\" >$index_url</p >\n";
			echo "</div >\n";
		echo "</div >\n";
		
		echo "<div >\n";
			echo "<table style=\"width:1000px;\" >\n";
				echo "<tbody >\n";
					$open_query = mysqli_query($connection,"SELECT * FROM $index_url ORDER BY id");
					while ( $row_query = mysqli_fetch_array($open_query) ) {
						echo "<tr >\n";
							echo "<td style=\"width:200px;text-align:right;\" >";
								echo "<button style=\"width:150px;height:30px;\" type=\"button\" id=\"button".htmlspecialchars($row_query['id'])."\" onclick=\"openButtonInput('div-input-".htmlspecialchars($row_query['id'])."')\" >$row_query[id]</button >";
							echo "</td >";
							echo "<td style=\"width:800px;height:100px;\" >";
								echo "<div style=\"margin-left:80px;visibility:hidden;\" id=\"div-input-".htmlspecialchars($row_query['id'])."\" >";
									echo "<form method=\"post\" action=\"include/action.php\" >";
										echo "<div style=\"margin:2px 0;\" >";
											echo "<input style=\"width:500px;height:25px;\" type=\"text\" name=\"input-url\" placeholder=\"".htmlspecialchars($row_query['url'])."\" />";
										echo "</div >";
										echo "<div style=\"display:inline-block;margin:2px 0;\" >";
											echo "<input style=\"width:80px;height:30px;margin:0 3px;\" type=\"submit\" name=\"input-submit\" />";
										echo "</div >";
										echo "<div style=\"display:inline-block;margin:2px 0;\" >";
											echo "<input style=\"width:80px;height:30px;margin:0 3px;\" type=\"reset\" name=\"input-reset\" />";
										echo "</div >";
										echo "<div style=\"display:inline-block;margin:2px 0;\" >";
											echo "<input style=\"width:100px;height:25px;\" type=\"text\" name=\"input-date\" placeholder=\"".htmlspecialchars($row_query['date'])."\" />";
											echo "<lable style=\"text-shadow:0 1px rgba(186,30,40,0.5);margin-left:30px;\" >$index_url</label >";
										echo "</div >";
										echo "<div >";
											echo "<input type=\"hidden\" name=\"hidden-index\" value=\"".htmlspecialchars($index_url)."\" />";
											echo "<input type=\"hidden\" name=\"hidden-id\" value=\"".htmlspecialchars($row_query['id'])."\" />";
											echo "<input type=\"hidden\" name=\"hidden-url\" value=\"".htmlspecialchars($row_query['url'])."\" />";
											echo "<input type=\"hidden\" name=\"hidden-date\" value=\"".htmlspecialchars($row_query['date'])."\" />";
										echo "</div >";
									echo "</form >";
								echo "</div >";
							echo "</td >";
						echo "</tr >\n";
					}
				echo "</tbody >\n";
			echo "</table >\n";
		echo "</div >\n";
		
		mysqli_close($connection);
	
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert URL</title>
<style type="text/css">
/* Reset */

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
    margin:0;
    padding:0;
    border:0;
}
ol, ul {
    list-style:none;
}
table {
    border-collapse:separate;
    border-spacing:0;
}


/* HTML */

#body {
	overflow-y:scroll;
}
#wrapper {
	font-family:verdana,arial,sans-serif;
	font-size:14px;
}


/* Inner-Header */

#inner-header {
	height:30px;
	color:#FFFE10;
	text-transform:uppercase;
	box-shadow:0 1px 15px rgba(186,30,40,0.5);
	background-color:#BA1E28;
}

#inner-header ul {
	text-align:center;
	padding-top:5px;
}
#inner-header li {
	display:inline-block;
}
#inner-header a {
	color:#FFFE10;
	text-decoration:none;
	padding:0 10px;
}


/* Inner-Content */

#inner-content {
	position:relative;
	width:1000px;
	color:#BA1E28;
	margin:0 auto;
}
#inner-content button {
	cursor:pointer;
	border: 1px solid #BA1E28;
	color: #FFFE10;
	text-shadow: 0 1px rgba(255,254,16,0.1);
	border-radius:5px;
	background-color: #BA1E28;
	background-image: -webkit-gradient(linear,left top,left bottom,from(#BA1E28),to(#BA1E28));
	background-image: -webkit-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: -moz-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: -ms-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: -o-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: linear-gradient(top,#BA1E28,#BA1E28);
}
#inner-content input[type=text] {
	color:#BA1E28;
	font-family:verdana,arial,sans-serif;
	text-align:center;
	border:1px solid #BA1E28;
	border-radius:5px;
}
#inner-content input[type=submit] {
	border: 1px solid #BA1E28;
	color: #FFFE10;
	text-shadow: 0 1px rgba(255,254,16,0.1);
	border-radius:5px;
	background-color: #BA1E28;
	background-image: -webkit-gradient(linear,left top,left bottom,from(#BA1E28),to(#BA1E28));
	background-image: -webkit-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: -moz-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: -ms-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: -o-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: linear-gradient(top,#BA1E28,#BA1E28);
}
#inner-content input[type=reset] {
	border: 1px solid #BA1E28;
	color: #FFFE10;
	text-shadow: 0 1px rgba(255,254,16,0.1);
	border-radius:5px;
	background-color: #BA1E28;
	background-image: -webkit-gradient(linear,left top,left bottom,from(#BA1E28),to(#BA1E28));
	background-image: -webkit-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: -moz-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: -ms-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: -o-linear-gradient(top,#BA1E28,#BA1E28);
	background-image: linear-gradient(top,#BA1E28,#BA1E28);
}
</style>
<script type="text/javascript">
function openButtonInput(div_input) {
	
	div_input = document.getElementById(div_input);
	if(div_input.style.visibility == "") {
		div_input.style.visibility = "hidden";
	} else {
		div_input.style.visibility = "";
	}
	
}
</script>
</head>
<body id="body" >
	<div id="wrapper" >
    	<div id="header" >
        	<div id="inner-header" >
            	<div >
                	<ul >
                    	<li ><a href="index.php?index-url=url_first" id="index-first" >First</a ></li >
                        <li ><a href="index.php?index-url=url_penult" id="index-penult" >Penult</a ></li >
                        <li ><a href="index.php?index-url=url_last" id="index-last" >Last</a ></li >
                        <li ><a href="http://localhost/admin/logout.php" id="index-logout" >Logout</a ></li >
                    </ul >
                </div >
            </div >
        </div >
        <div id="content" >
        	<div id="inner-content" >
            	<?php
					if ( isset($_GET['index-url']) ) {
						$index_url = isset($_GET['index-url']) ? addslashes($_GET['index-url']) : "";
						openIndexResult($index_url);
					}
				?>
            </div >
        </div >
        <div id="footer" >
        	<div id="inner-footer" >
            </div >
        </div >
    </div >
</body>
</html>