<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กุลปริยา แก้วตา (แพรว)</title>
</head>

<body>
<h1>a.php</h1>

<?php
	$_SESSION['name'] = "กุลปริยา แก้วตา" ;
	$_SESSION['nickname'] = "แพรว" ;
	
	//echo $_SESSION['name'] ;
	//echo $_SESSION['nickname'] ;

?>

</body>
</html>