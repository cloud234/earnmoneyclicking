<?php

	ini_set("memory_limit","64M");
	ini_set("max_execution_time","300");
	ini_set("mysql.connect_timeout","90");
	date_default_timezone_set("America/Sao_Paulo");

?>
<?php

	// URL First
	
	function FirstDateText($id) {
		
		$file = "text/date_first/".$id.".txt";
		if ( file_exists($file) ) {
			$open = fopen($file,"r");
			$link = fread($open, 7);
			fclose($open);
			if ( !empty($link) ) {
				echo $link;
			} else {
				FirstDateMysql("url_first",$id);
			}
		} else {
			FirstDateMysql("url_first",$id);
		}
		
	}
	
	function FirstBRLinkText($num,$id) {
		
		switch ( $num ) {
			
			case "5":
				$file = "text/url_first/".$id.".txt";
				if ( file_exists($file) ) {
					$open = fopen($file,"r");
					$link = fread($open, 100);
					fclose($open);
					if ( !empty($link) ) {
						$url = explode("/",$link);
						$array1 = array($url['0'],$url['1'],$url['2']);
						$array2 = array($url['3'],$url['4'],$url['5']);
						$parte1 = implode("/",$array1);
						$parte2 = implode("/",$array2);
						$p1 = $parte1."/";
						$p2 = $parte2;
						echo $p1."\n".$p2;
					} else {
						FirstBRLinkMysql($num,"url_first",$id);
					}
				} else {
					FirstBRLinkMysql($num,"url_first",$id);
				}
			break;

			case "6":
				$file = "text/url_first/".$id.".txt";
				if ( file_exists($file) ) {
					$open = fopen($file,"r");
					$link = fread($open, 100);
					fclose($open);
					if ( !empty($link) ) {
						$url = explode("/",$link);
						$array1 = array($url['0'],$url['1'],$url['2']);
						$array2 = array($url['3'],$url['4'],$url['5'],$url['6']);
						$parte1 = implode("/",$array1);
						$parte2 = implode("/",$array2);
						$p1 = $parte1."/";
						$p2 = $parte2;
						echo $p1."\n".$p2;
					} else {
						FirstBRLinkMysql($num,"url_first",$id);
					}
				} else {
					FirstBRLinkMysql($num,"url_first",$id);
				}
			break;
			
		}
	
	}
	
	function FirstLinkText($id) {
		
		$file = "text/url_first/".$id.".txt";
		if ( file_exists($file) ) {
			$open = fopen($file,"r");
			$link = fread($open, 100);
			fclose($open);
			if ( !empty($link) ) {
				echo $link;
			} else {
				FirstLinkMysql("url_first",$id);
			}
		} else {
			FirstLinkMysql("url_first",$id);
		}
		
	}
	
	function FirstBRLinkMysql($num,$tab,$id) {
		
		switch ( $num ) {
			
			case "5":
				$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
				while ( $row = mysql_fetch_array($query) ) {
					$url = explode("/",$row['url']);
					$array1 = array($url['0'],$url['1'],$url['2']);
					$array2 = array($url['3'],$url['4'],$url['5']);
					$parte1 = implode("/",$array1);
					$parte2 = implode("/",$array2);
					$p1 = $parte1."/";
					$p2 = $parte2;
					echo $p1."\n".$p2;
				}
			break;

			case "6":
				$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
				while ( $row = mysql_fetch_array($query) ) {
					$url = explode("/",$row['url']);
					$array1 = array($url['0'],$url['1'],$url['2']);
					$array2 = array($url['3'],$url['4'],$url['5'],$url['6']);
					$parte1 = implode("/",$array1);
					$parte2 = implode("/",$array2);
					$parte1 = trim($parte1);
					$parte2 = trim($parte2);
					$p1 = $parte1."/";
					$p2 = $parte2;
					echo $p1."\n".$p2;
				}
			break;
			
		}
		
	}
	
	function FirstDateMysql($tab,$id) {
		
		$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
		while ( $row = mysql_fetch_array($query) ) {
			echo $row['date'];
		}
		
	}
		
	function FirstLinkMysql($tab,$id) {
		
		$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
		while ( $row = mysql_fetch_array($query) ) {
			echo $row['url'];
		}
		
	}
	
?>
<?php

	// URL Penult
	
	function PenultDateText($id) {
		
		$file = "text/date_penult/".$id.".txt";
		if ( file_exists($file) ) {
			$open = fopen($file,"r");
			$link = fread($open, 7);
			fclose($open);
			if ( !empty($link) ) {
				echo $link;
			} else {
				PenultDateMysql("url_penult",$id);
			}
		} else {
			PenultDateMysql("url_penult",$id);
		}
		
	}
	
	function PenultBRLinkText($num,$id) {
		
		switch ( $num ) {
			
			case "5":
				$file = "text/url_penult/".$id.".txt";
				if ( file_exists($file) ) {
					$open = fopen($file,"r");
					$link = fread($open, 100);
					fclose($open);
					if ( !empty($link) ) {
						$url = explode("/",$link);
						$array1 = array($url['0'],$url['1'],$url['2']);
						$array2 = array($url['3'],$url['4'],$url['5']);
						$parte1 = implode("/",$array1);
						$parte2 = implode("/",$array2);
						$p1 = $parte1."/";
						$p2 = $parte2;
						echo $p1."\n".$p2;
					} else {
						PenultBRLinkMysql($num,"url_penult",$id);
					}
				} else {
					PenultBRLinkMysql($num,"url_penult",$id);
				}
			break;

			case "6":
				$file = "text/url_penult/".$id.".txt";
				if ( file_exists($file) ) {
					$open = fopen($file,"r");
					$link = fread($open, 100);
					fclose($open);
					if ( !empty($link) ) {
						$url = explode("/",$link);
						$array1 = array($url['0'],$url['1'],$url['2']);
						$array2 = array($url['3'],$url['4'],$url['5'],$url['6']);
						$parte1 = implode("/",$array1);
						$parte2 = implode("/",$array2);
						$p1 = $parte1."/";
						$p2 = $parte2;
						echo $p1."\n".$p2;
					} else {
						PenultBRLinkMysql($num,"url_penult",$id);
					}
				} else {
					PenultBRLinkMysql($num,"url_penult",$id);
				}
			break;
			
		}
	
	}
	
	function PenultLinkText($id) {
		
		$file = "text/url_penult/".$id.".txt";
		if ( file_exists($file) ) {
			$open = fopen($file,"r");
			$link = fread($open, 100);
			fclose($open);
			if ( !empty($link) ) {
				echo $link;
			} else {
				PenultLinkMysql("url_penult",$id);
			}
		} else {
			PenultLinkMysql("url_penult",$id);
		}
		
	}
	
	function PenultBRLinkMysql($num,$tab,$id) {
		
		switch ( $num ) {
			
			case "5":
				$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
				while ( $row = mysql_fetch_array($query) ) {
					$url = explode("/",$row['url']);
					$array1 = array($url['0'],$url['1'],$url['2']);
					$array2 = array($url['3'],$url['4'],$url['5']);
					$parte1 = implode("/",$array1);
					$parte2 = implode("/",$array2);
					$p1 = $parte1."/";
					$p2 = $parte2;
					echo $p1."\n".$p2;
				}
			break;

			case "6":
				$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
				while ( $row = mysql_fetch_array($query) ) {
					$url = explode("/",$row['url']);
					$array1 = array($url['0'],$url['1'],$url['2']);
					$array2 = array($url['3'],$url['4'],$url['5'],$url['6']);
					$parte1 = implode("/",$array1);
					$parte2 = implode("/",$array2);
					$p1 = $parte1."/";
					$p2 = $parte2;
					echo $p1."\n".$p2;
				}
			break;
			
		}
		
	}
	
	function PenultDateMysql($tab,$id) {
		
		$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
		while ( $row = mysql_fetch_array($query) ) {
			echo $row['date'];
		}
		
	}
		
	function PenultLinkMysql($tab,$id) {
		
		$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
		while ( $row = mysql_fetch_array($query) ) {
			echo $row['url'];
		}
		
	}
	
?>
<?php

	// URL Last
	
	function LastDateText($id) {
		
		$file = "text/date_last/".$id.".txt";
		if ( file_exists($file) ) {
			$open = fopen($file,"r");
			$link = fread($open, 7);
			fclose($open);
			if ( !empty($link) ) {
				echo $link;
			} else {
				LastDateMysql("url_last",$id);
			}
		} else {
			LastDateMysql("url_last",$id);
		}
		
	}
	
	function LastBRLinkText($num,$id) {
		
		switch ( $num ) {
			
			case "5":
				$file = "text/url_last/".$id.".txt";
				if ( file_exists($file) ) {
					$open = fopen($file,"r");
					$link = fread($open, 100);
					fclose($open);
					if ( !empty($link) ) {
						$url = explode("/",$link);
						$array1 = array($url['0'],$url['1'],$url['2']);
						$array2 = array($url['3'],$url['4'],$url['5']);
						$parte1 = implode("/",$array1);
						$parte2 = implode("/",$array2);
						$p1 = $parte1."/";
						$p2 = $parte2;
						echo $p1."\n".$p2;
					} else {
						LastBRLinkMysql($num,"url_last",$id);
					}
				} else {
					LastBRLinkMysql($num,"url_last",$id);
				}
			break;

			case "6":
				$file = "text/url_last/".$id.".txt";
				if ( file_exists($file) ) {
					$open = fopen($file,"r");
					$link = fread($open, 100);
					fclose($open);
					if ( !empty($link) ) {
						$url = explode("/",$link);
						$array1 = array($url['0'],$url['1'],$url['2']);
						$array2 = array($url['3'],$url['4'],$url['5'],$url['6']);
						$parte1 = implode("/",$array1);
						$parte2 = implode("/",$array2);
						$p1 = $parte1."/";
						$p2 = $parte2;
						echo $p1."\n".$p2;
					} else {
						LastBRLinkMysql($num,"url_last",$id);
					}
				} else {
					LastBRLinkMysql($num,"url_last",$id);
				}
			break;
			
		}
	
	}
	
	function LastLinkText($id) {
		
		$file = "text/url_last/".$id.".txt";
		if ( file_exists($file) ) {
			$open = fopen($file,"r");
			$link = fread($open, 100);
			fclose($open);
			if ( !empty($link) ) {
				echo $link;
			} else {
				LastLinkMysql("url_last",$id);
			}
		} else {
			LastLinkMysql("url_last",$id);
		}
		
	}
	
	function LastBRLinkMysql($num,$tab,$id) {
		
		switch ( $num ) {
			
			case "5":
				$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
				while ( $row = mysql_fetch_array($query) ) {
					$url = explode("/",$row['url']);
					$array1 = array($url['0'],$url['1'],$url['2']);
					$array2 = array($url['3'],$url['4'],$url['5']);
					$parte1 = implode("/",$array1);
					$parte2 = implode("/",$array2);
					$p1 = $parte1."/";
					$p2 = $parte2;
					echo $p1."\n".$p2;
				}
			break;

			case "6":
				$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
				while ( $row = mysql_fetch_array($query) ) {
					$url = explode("/",$row['url']);
					$array1 = array($url['0'],$url['1'],$url['2']);
					$array2 = array($url['3'],$url['4'],$url['5'],$url['6']);
					$parte1 = implode("/",$array1);
					$parte2 = implode("/",$array2);
					$p1 = $parte1."/";
					$p2 = $parte2;
					echo $p1."\n".$p2;
				}
			break;
			
		}
		
	}
	
	function LastDateMysql($tab,$id) {
		
		$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
		while ( $row = mysql_fetch_array($query) ) {
			echo $row['date'];
		}
		
	}
		
	function LastLinkMysql($tab,$id) {
		
		$query = $GLOBALS['mySQL']->OpenQuery("SELECT * FROM $tab where id='$id'");
		while ( $row = mysql_fetch_array($query) ) {
			echo $row['url'];
		}
		
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Paid to Click - Low Payout</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Paid to Click Low Payout - Paid to Click Payout 0.00 to 0.50 cent" />
<meta name="keywords" content="paid to click low payout,ptc low payout,paid to click payout 0.00 to 0.15 cent,ptc payout 0.00 to 0.15 cent" />
<meta name="alexaVerifyID" content="YMDX3-QWYk1ApMu8niqnRpF7_QU" />
<meta name="robots" content="noodp" />
<meta http-equiv="pragma" content="no-cache,no-store" />
<style type="text/css">
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-weight: inherit;
    font-style: inherit;
    font-size: 100%;
    font-family: inherit;
    vertical-align: baseline;
}
:focus {
    outline: 0;
}
body {
    line-height: 1;
    color: black;
    background: white;
}
ol, ul {
    list-style: none;
}
table {
    border-collapse: separate;
    border-spacing: 0;
}
caption, th, td {
    text-align: left;
    font-weight: normal;
}
</style>
<style type="text/css">
body {
}
#all {
	width:980px;
	height:2310px;
	font-family:Comic Sans MS;
	margin:0 auto;
	border-top:3px solid #ccffcc;
	border-right:10px solid #ccffcc;
	border-bottom:3px solid #ccffcc;
	border-left:10px solid #ccffcc;
	background:#ffffcc;
}
#header {
	width:980px;
	height:185px;
	background:#333366;
}
#content {
	position:relative;
	width:980px;
	height:2000px;
}
#footer {
	position:relative;
	width:980px;
	height:125px;
}
#footer .banner {
	position:relative;
	top:20px;
	left:126px;
	width:728px;
	height:90px;
}
a:link {
	color:#9da4a7;
	font:italic 9px courier new;
}
a:active {
	color:#9da4a7;
	font:italic 9px courier new;
}
a:visited {
	color:#9da4a7;
	font:italic 9px courier new;
}
a:hover {
	color:#9da4a7;
	font:italic 9px courier new;
}
</style>
<style type="text/css">
#header #block {
	position:absolute;
}
#header #text {
	position:relative;
	width:980px;
	height:120px;
	background-image:url("http://images.earnmoneyclicking.com/background/topo.jpg");
}
#header #banner1 {
	position:absolute;
	left:15px;
	width:468px;
	height:60px;
}
#header #banner2 {
	position:absolute;
	right:15px;
	width:468px;
	height:60px;
}
#block1 {
	display:block;
	position:relative;
	width:980px;
	height:400px;
}
#block1 .box1 {
	display:block;
	position:absolute;
	left:0px;
	width:225px;
	height:400px;
}
#block1 .box2 {
	position:absolute;
	left:225px;
	width:530px;
	height:400px;
}
#block1 .box3 {
	position:absolute;
	left:755px;
	width:225px;
	height:400px;
	text-align:right;
}
#block2 {
	position:relative
	width:980px;
	height:400px;
}
#block2 .box1 {
	position:absolute;
	left:0px;
	width:225px;
	height:400px;
}
#block2 .box2 {
	position:absolute;
	left:225px;
	width:530px;
	height:400px;
}
#block2 .box3 {
	position:absolute;
	left:755px;
	width:225px;
	height:400px;
	text-align:right;
}
#block3 {
	position:relative;
	width:980px;
	height:400px;
}
#block3 .box1 {
	position:absolute;
	left:0px;
	width:225px;
	height:400px;
}
#block3 .box2 {
	position:absolute;
	left:225px;
	width:530px;
	height:400px;
}
#block3 .box3 {
	position:absolute;
	left:755px;
	width:225px;
	height:400px;
	text-align:right;
}
#block4 {
	position:relative;
	width:980px;
	height:400px;
}
#block4 .box1 {
	position:absolute;
	left:0px;
	width:225px;
	height:400px;
}
#block4 .box2 {
	position:absolute;
	left:225px;
	width:530px;
	height:400px;
}
#block4 .box3 {
	position:absolute;
	left:755px;
	width:225px;
	height:400px;
	text-align:right;
}
#block5 {
	position:relative;
	width:980px;
	height:400px;
}
#block5 .box1 {
	position:absolute;
	left:0px;
	width:225px;
	height:400px;
}
#block5 .box2 {
	position:absolute;
	left:225px;
	width:530px;
	height:400px;
}
#block5 .box3 {
	position:absolute;
	left:755px;
	width:225px;
	height:400px;
	text-align:right;
}
</style>
<style type="text/css">
.box1 img {
	margin-top:20px;
	margin-left:15px;
}
.box1 .p11 {
	color:#cc0033;
	font-size:16px;
	font-style:italic;
	word-spacing:2px;
	letterspacing:1px;
	margin:15px 0px 0px 15px;
}
.box1 .p12 {
	color:#cc0033;
	font-size:16px;
	font-style:italic;
	word-spacing:2px;
	letterspacing:1px;
	margin:6px 0px 0px 15px;
}
.box1 .p13 {
	color:#cc0033;
	font-size:16px;
	font-style:italic;
	word-spacing:2px;
	letterspacing:1px;
	margin:6px 0px 0px 15px;
}
.box1 .p21 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:16px 0px 0px 15px;
}
.box1 .p22 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:4px 10px 0px 18px;
}
.box1 .p31 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:16px 0px 0px 15px;
}
.box1 .p32 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:4px 10px 0px 18px;
}
.box1 .p41 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:16px 0px 0px 15px;
}
.box1 .p42 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:4px 10px 0px 18px;
}
.box1 .p51 {
	color:#cc0033;
	font-size:12px;
	font-style:italic;
	margin:16px 0px 5px 15px;
}
.box1 .p52 {
	color:#cc0033;
	font-size:12px;
	font-style:italic;
	margin:5px 0px 0px 15px;
}
.box1 .p53 {
	color:#cc0033;
	font-size:12px;
	font-style:italic;
	margin:5px 0px 0px 15px;
}
.box2 img {
	margin-top:20px;
	margin-left:31px;
}
.box2 .p11 {
	color:#cc0033;
	font-size:16px;
	font-style:italic;
	word-spacing:2px;
	letterspacing:1px;
	margin:15px 0px 0px 95px;
}
.box2 .p12 {
	color:#cc0033;
	font-size:16px;
	font-style:italic;
	word-spacing:2px;
	letterspacing:1px;
	margin:6px 0px 0px 320px;
}
.box2 .p21 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:12px 0px 0px 115px;
}
.box2 .p22 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:4px 7px 0px 138px;
}
.box2 .p31 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:12px 0px 0px 115px;
}
.box2 .p32 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:4px 7px 0px 138px;
}
.box2 .p41 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:12px 0px 0px 115px;
}
.box2 .p42 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:4px 7px 0px 138px;
}
.box2 .p51 {
	color:#669966;
	font-size:11px;
	font-style:italic;
	margin:12px 0px 5px 138px;
}
.box2 .p52 {
	color:#669966;
	font-size:11px;
	font-style:italic;
	margin:4px 0px 0px 138px;
}
.box2 .p53 {
	color:#669966;
	font-size:11px;
	font-style:italic;
	margin:4px 0px 0px 138px;
}
.box2 .p54 {
	color:#669966;
	font-size:11px;
	font-style:italic;
	margin:4px 0px 0px 138px;
}
.box2 .p61 {
	color:#cc0033;
	font-size:12px;
	font-style:italic;
	margin:16px 0px 5px 95px;
}
.box2 .p62 {
	color:#cc0033;
	font-size:12px;
	font-style:italic;
	margin:5px 0px 0px 95px;
}
.box2 .p63 {
	color:#cc0033;
	font-size:12px;
	font-style:italic;
	margin:5px 0px 0px 95px;
}
.box3 img {
	margin-top:20px;
	margin-right:15px;
}
.box3 .p11 {
	color:#cc0033;
	font-size:16px;
	font-style:italic;
	word-spacing:2px;
	letterspacing:1px;
	margin:15px 15px 0px 0px;
}
.box3 .p12 {
	color:#cc0033;
	font-size:16px;
	font-style:italic;
	word-spacing:2px;
	letterspacing:1px;
	margin:6px 15px 0px 0px;
}
.box3 .p13 {
	color:#cc0033;
	font-size:16px;
	font-style:italic;
	word-spacing:2px;
	letterspacing:1px;
	margin:6px 15px 0px 0px;
}
.box3 .p21 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:16px 15px 0px 0px;
}
.box3 .p22 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:4px 18px 0px 0px;
}
.box3 .p31 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:16px 15px 0px 0px;
}
.box3 .p32 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:4px 18px 0px 0px;
}
.box3 .p41 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:16px 15px 0px 0px;
}
.box3 .p42 {
	color:#669966;
	font-size:12px;
	font-style:italic;
	margin:4px 18px 0px 0px;
}
.box3 .p51 {
	color:#cc0033;
	font-size:12px;
	font-style:italic;
	margin:16px 15px 5px 0px;
}
.box3 .p52 {
	color:#cc0033;
	font-size:12px;
	font-style:italic;
	margin:5px 15px 0px 0px;
}
.box3 .p53 {
	color:#cc0033;
	font-size:12px;
	font-style:italic;
	margin:5px 15px 0px 0px;
}
</style>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-38310519-1']);
	_gaq.push(['_trackPageview']);
	(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
</head>
<body>

<div id="all" >
	<div id="header" >
    	<div id="block" >
            <div id="text" >
            </div>
            <div id="banner1" >
            
            	<script type="text/javascript" src="http://adhitzads.com/582072"></script>
                
            </div>
            <div id="banner2" >
            
            	<script type="text/javascript" src="http://adhitzads.com/582072"></script>
                
            </div>
        </div >
    </div >
    <div id="content" >
    	<div id="block1" >
        	<div class="box1" >
            
            	<!-- EasyHits4u -->
                
            	<a href="banner.php?id=easyhits4u" rel="nofollow" target="_blank" ><img width="120" height="60" border="0" src="http://images.earnmoneyclicking.com/images/EasyHits4u.jpg" /></a>
                <p class="p11" >0.30 per 1000 Hits</p >
                <p class="p12" >Traffic Exchange 1:1</p >
                <p class="p13" >Payout - 3.00</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("easyhits4u"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=easyhits4u" rel="nofollow" target="_blank" ><?php echo FirstBRLinkText("5","easyhits4u"); ?></a></p >
                <p class="p31" >Penult Payment - <?php echo PenultDateText("easyhits4u"); ?></p >
                <p class="p32" >-&nbsp;<a href="penult.php?id=easyhits4u" rel="nofollow" target="_blank" ><?php echo PenultBRLinkText("5","easyhits4u"); ?></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("easyhits4u"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=easyhits4u" rel="nofollow" target="_blank" ><?php echo LastBRLinkText("5","easyhits4u"); ?></a></p >
                
            </div >
            <div class="box2" >
            
            	<!-- GetPaidtoClick -->
                
            	<a href="banner.php?id=getpaidtoclick" rel="nofollow" target="_blank" ><img width="468" height="60" border="0" src="http://images.earnmoneyclicking.com/images/GetPaidtoClick.jpg" /></a>
                <p class="p11" >0.0009 a 0.0003 per click - 40 ads - 0.012</p >
                <p class="p12" >Payout - 0.05</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("getpaidtoclick"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=getpaidtoclick" rel="nofollow" target="_blank" ><?php echo FirstLinkText("getpaidtoclick"); ?></a></p >
                <p class="p31" >Penult Payment - <?php echo PenultDateText("getpaidtoclick"); ?></p >
                <p class="p32" >-&nbsp;<a href="penult.php?id=getpaidtoclick" rel="nofollow" target="_blank" ><?php echo PenultLinkText("getpaidtoclick"); ?></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("getpaidtoclick"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=getpaidtoclick" rel="nofollow" target="_blank" ><?php echo LastLinkText("getpaidtoclick"); ?></a></p >
                <p class="p51" >- Banner 100% safe</p >
                <p class="p52" >- Browser the latest versions, Windows - SP2...</p >
                <p class="p53" >- Trojan extension: .exe, .bat, .scr, etc, no cheat...</p >
                <p class="p54" >- Google Chrome translates page logged</p >
                <p class="p61" >- Sells Referred</p >
                <p class="p62" >- Rent Referred</p >
                
            </div >
            <div class="box3" >
            
            	<!-- NeoBux -->
                
            	<a href="banner.php?id=neobux" rel="nofollow" target="_blank" ><img width="120" height="60" border="0" src="http://images.earnmoneyclicking.com/images/NeoBux.jpg" /></a>
                <p class="p11" >0.001 per Click</p >
                <p class="p12" >20 ads - 0.02</p >
                <p class="p13" >Payout - 2.00</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("neobux"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=neobux" rel="nofollow" target="_blank" ><?php echo FirstBRLinkText("5","neobux"); ?></a></p >
                <p class="p31" >Penult Payment - <?php echo PenultDateText("neobux"); ?></p >
                <p class="p32" >-&nbsp;<a href="penult.php?id=neobux" rel="nofollow" target="_blank" ><?php echo PenultBRLinkText("5","neobux"); ?></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("neobux"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=neobux" rel="nofollow" target="_blank" ><?php echo LastBRLinkText("5","neobux"); ?></a></p >
                <p class="p51" >- Rent Referred</p >
                <p class="p52" >- Click Referred 0.005</p >
                
            </div >
        </div >
        <div id="block2" >
        	<div class="box1" >
            
            	<!-- JillsClickCorner -->
                
            	<a href="banner.php?id=jillsclickcorner" rel="nofollow" target="_blank" ><img width="120" height="60" border="0" src="http://images.earnmoneyclicking.com/images/JillsClickCorner.jpg" /></a>
                <p class="p11" >0.001 per Click</p >
                <p class="p12" >40 ads - 0.04</p >
                <p class="p13" >Payout - 1.00</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("jillsclickcorner"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=jillsclickcorner" rel="nofollow" target="_blank" ><?php echo FirstBRLinkText("5","jillsclickcorner"); ?></a></p >
                <p class="p31" >Penult Payment - <?php echo PenultDateText("jillsclickcorner"); ?></p >
                <p class="p32" >-&nbsp;<a href="penult.php?id=jillsclickcorner" rel="nofollow" target="_blank" ><?php echo PenultBRLinkText("5","jillsclickcorner"); ?></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("jillsclickcorner"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=jillsclickcorner" rel="nofollow" target="_blank" ><?php echo LastBRLinkText("5","jillsclickcorner"); ?></a></p >
                <p class="p51" >- Sells Referred</p >
                <p class="p52" >- Paid to Signup</p >
                
            </div >
            <div class="box2" >
                
                <!-- Cashtream -->
                
            	<a href="banner.php?id=cashtream" rel="nofollow" target="_blank" ><img width="468" height="60" border="0" src="http://images.earnmoneyclicking.com/images/Cashtream.jpg" /></a>
                <p class="p11" >0.002 to 0.00035 per click - 25 ads - 0.012</p >
                <p class="p12" >Payout - 0.10</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("cashtream"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=cashtream" rel="nofollow" target="_blank" ><?php echo FirstLinkText("cashtream"); ?></a></p ></a></p >
                <p class="p31" >Penult Payment - <?php echo PenultDateText("cashtream"); ?></p >
                <p class="p32" >-&nbsp;<a href="penult.php?id=cashtream" rel="nofollow" target="_blank" ><?php echo PenultLinkText("cashtream"); ?></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("cashtream"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=cashtream" rel="nofollow" target="_blank" ><?php echo LastLinkText("cashtream"); ?></a></p >
                <p class="p51" >- Banner 100% safe</p >
                <p class="p52" >- Browser the latest versions, Windows - SP2...</p >
                <p class="p53" >- Trojan extension: .exe, .bat, .scr, etc, no cheat...</p >
                <p class="p54" >- Google Chrome translates page logged</p >
                <p class="p61" >- Sells Referred</p >
                <p class="p62" >- Payout 0.10, 0.25, 0.40, 0.50, 0.60, 0.80</p >
                
            </div >
            <div class="box3" >
            
            	<!-- Clixsense -->
                
            	<a href="banner.php?id=clixsense" rel="nofollow" target="_blank" ><img width="120" height="60" border="0" src="http://images.earnmoneyclicking.com/images/Clixsense.jpg" /></a>
                <p class="p11" >0.01 to 0.001</p >
                <p class="p12" >20 ads - 0.035</p >
                <p class="p13" >Payout - 8.00</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("clixsense"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=clixsense" rel="nofollow" target="_blank" ><?php echo FirstBRLinkText("5","clixsense"); ?></a></p >
                <p class="p31" ></p >
                <p class="p32" ><a href="penult.php?id=clixsense" rel="nofollow" target="_blank" ></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("clixsense"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=clixsense" rel="nofollow" target="_blank" ><?php echo LastBRLinkText("5","clixsense"); ?></a></p >
                
            </div >
        </div >
        <div id="block3" >
        	<div class="box1" >
            
            	<!-- DonkeyMails -->
                
            	<a href="banner.php?id=donkeymails" rel="nofollow" target="_blank" ><img width="120" height="60" border="0" src="http://images.earnmoneyclicking.com/images/DonkeyMails.jpg" /></a>
                <p class="p11" >0.001 per click</p >
                <p class="p12" >20 ads - 0.02</p >
                <p class="p13" >Payout - 1.00</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("donkeymails"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=donkeymails" rel="nofollow" target="_blank" ><?php echo FirstBRLinkText("5","donkeymails"); ?></a></p >
                <p class="p31" >Penult Payment - <?php echo PenultDateText("donkeymails"); ?></p >
                <p class="p32" >-&nbsp;<a href="penult.php?id=donkeymails" rel="nofollow" target="_blank" ><?php echo PenultBRLinkText("5","donkeymails"); ?></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("donkeymails"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=donkeymails" rel="nofollow" target="_blank" ><?php echo LastBRLinkText("5","donkeymails"); ?></a></p >
                <p class="p51" >- Sells Referred</p >
                <p class="p52" >- Paid to E-mail</p >
                <p class="p53" >- Paid to Signup</p >
                
            </div >
            <div class="box2" >
            
            	<!-- ScarletClicks -->
                
            	<a href="banner.php?id=scarletclicks" rel="nofollow" target="_blank" ><img width="468" height="60" border="0" src="http://images.earnmoneyclicking.com/images/ScarletClicks.jpg" /></a>
                <p class="p11" >0.002 to 0.0005 per click - 15 ads - 0.01</p >
                <p class="p12" >Payout - 0.30</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("scarletclicks"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=scarletclicks" rel="nofollow" target="_blank" ><?php echo FirstLinkText("scarletclicks"); ?></a></p >
                <p class="p31" >Penult Payment - <?php echo PenultDateText("scarletclicks"); ?></p >
                <p class="p32" >-&nbsp;<a href="penult.php?id=scarletclicks" rel="nofollow" target="_blank" ><?php echo PenultLinkText("scarletclicks"); ?></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("scarletclicks"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=scarletclicks" rel="nofollow" target="_blank" ><?php echo LastLinkText("scarletclicks"); ?></a></p >
                <p class="p51" >- Banner 100% safe</p >
                <p class="p52" >- Browser the latest versions, Windows - SP2...</p >
                <p class="p53" >- Trojan extension: .exe, .bat, .scr, etc, no cheat...</p >
                <p class="p54" >- Google Chrome translates page logged</p >
                <p class="p61" >- Sells Referred</p >
                <p class="p62" >- Payout 0.30, 0.35, 0.40, 0.45, 0.50</p >
                
            </div >
            <div class="box3" >
            
            	<!-- Clicksia -->
                
            	<a href="banner.php?id=clicksia" rel="nofollow" target="_blank" ><img width="120" height="60" border="0" src="http://images.earnmoneyclicking.com/images/Clicksia.jpg" /></a>
                <p class="p11" >0.002 to 0.001</p >
                <p class="p12" >8 ads - 0.01</p >
                <p class="p13" >Payout - 1.00</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("clicksia"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=clicksia" rel="nofollow" target="_blank" ><?php echo FirstBRLinkText("5","clicksia"); ?></a></p >
                <p class="p31" >Penult Payment - <?php echo PenultDateText("clicksia"); ?></p >
                <p class="p32" >-&nbsp;<a href="penult.php?id=clicksia" rel="nofollow" target="_blank" ><?php echo PenultBRLinkText("5","clicksia"); ?></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("clicksia"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=clicksia" rel="nofollow" target="_blank" ><?php echo LastBRLinkText("5","clicksia"); ?></a></p >
                <p class="p51" >- Sells Referred</p >
                
            </div >
        </div >
        <div id="block4" >
        	<div class="box1" >
            
            	<!-- Box1 -->
                
            </div >
            <div class="box2" >
            
            	<!-- Cashons -->
                
            	<a href="banner.php?id=cashons" rel="nofollow" target="_blank" ><img width="468" height="60" border="0" src="http://images.earnmoneyclicking.com/images/Cashons.jpg" /></a>
                <p class="p11" >0.001 to 0.00035 per click - 25 ads - 0.01</p >
                <p class="p12" >Payout - 0.60</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("cashons"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=cashons" rel="nofollow" target="_blank" ><?php echo FirstLinkText("cashons"); ?></a></p >
                <p class="p31" >Penult Payment - <?php echo PenultDateText("cashons"); ?></p >
                <p class="p32" >-&nbsp;<a href="penult.php?id=cashons" rel="nofollow" target="_blank" ><?php echo PenultLinkText("cashons"); ?></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("cashons"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=cashons" rel="nofollow" target="_blank" ><?php echo LastLinkText("cashons"); ?></a></p >
                <p class="p51" >- Banner 100% safe</p >
                <p class="p52" >- Browser the latest versions, Windows - SP2...</p >
                <p class="p53" >- Trojan extension: .exe, .bat, .scr, etc, no cheat...</p >
                <p class="p54" >- Google Chrome translates page logged</p >
                <p class="p61" >- Sells Referred</p >
                <p class="p62" >- Payout 1.00, 0.90, 0.80, 0.70, 0.60</p >
                
            </div >
            <div class="box3" >
            
            	<!-- Incentria -->
                
            	<a href="banner.php?id=incentria" rel="nofollow" target="_blank" ><img width="120" height="60" border="0" src="http://images.earnmoneyclicking.com/images/Incentria.jpg" /></a>
                <p class="p11" >0.002 to 0.001</p >
                <p class="p12" >8 ads - 0.01</p >
                <p class="p13" >Payout - 1.00</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("incentria"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=incentria" rel="nofollow" target="_blank" ><?php echo FirstBRLinkText("5","incentria"); ?></a></p >
                <p class="p31" >Penult Payment - <?php echo PenultDateText("incentria"); ?></p >
                <p class="p32" >-&nbsp;<a href="penult.php?id=incentria" rel="nofollow" target="_blank" ><?php echo PenultBRLinkText("5","incentria"); ?></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("incentria"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=incentria" rel="nofollow" target="_blank" ><?php echo LastBRLinkText("5","incentria"); ?></a></p >
                <p class="p51" >- Sells Referred</p >
                
            </div >
        </div >
        <div id="block5" >
        	<div class="box1" >
            
            	<!-- Box1 -->
                
            </div >
            <div class="box2" >
            
            	<!-- Cashnhits -->
                
            	<a href="banner.php?id=cashnhits" rel="nofollow" target="_blank" ><img width="468" height="60" border="0" src="http://images.earnmoneyclicking.com/images/Cashnhits.jpg" /></a>
                <p class="p11" >0.002 to 0.0005 per click - 25 ads - 0.02</p >
                <p class="p12" >Payout - 0.60</p >
                <p class="p21" >First Payment - <?php echo FirstDateText("cashnhits"); ?></p >
                <p class="p22" >-&nbsp;<a href="first.php?id=cashnhits" rel="nofollow" target="_blank" ><?php echo FirstLinkText("cashnhits"); ?></a></p >
                <p class="p31" >Penult Payment - <?php echo PenultDateText("cashnhits"); ?></p >
                <p class="p32" >-&nbsp;<a href="penult.php?id=cashnhits" rel="nofollow" target="_blank" ><?php echo PenultLinkText("cashnhits"); ?></a></p >
                <p class="p41" >Last Payment - <?php echo LastDateText("cashnhits"); ?></p >
                <p class="p42" >-&nbsp;<a href="last.php?id=cashnhits" rel="nofollow" target="_blank" ><?php echo LastLinkText("cashnhits"); ?></a></p >
                <p class="p51" >- Banner 100% safe</p >
                <p class="p52" >- Browser the latest versions, Windows - SP2...</p >
                <p class="p53" >- Trojan extension: .exe, .bat, .scr, etc, no cheat...</p >
                <p class="p54" >- Google Chrome translates page logged</p >
                <p class="p61" >- Sells Referred</p >
                <p class="p62" >- Payout 0.60, 1.00, 1.50, 2.00, 2.50</p >
                
            </div >
            <div class="box3" >
            
            	<!-- Box3 -->
                
            </div >
        </div >
    </div >
    <div id="footer" >
    	<div class="banner" >
        
        	<script type="text/javascript" src="http://adhitzads.com/582075"></script>
            
        </div >
    </div >
</div >

</body>
</html>
<?php

	// connection mysql
	
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "local";
	$connection = mysqli_connect($hostname,$username,$password);
	$database_selected = mysqli_select_db($connection,$database);
	
	if ( $database_selected ) {
		
		// get host
		
		$host_ip = $_SERVER['REMOTE_ADDR'];
		$host_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
		$host_http = getenv('HTTP_REFERER');
		$host_time = date("H:i:s");
		$host_date = date("Y/m/d");
		
		// insert host
		
		mysqli_query($connection,"INSERT INTO local (ip,host,http,time,date) VALUES ('$host_ip','$host_host','$host_http','$host_time','$host_date')") or die (mysql_error());
	
	}
	
	// close mysql
	
	mysqli_close($connection);

?>