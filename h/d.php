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
<h1>d.php</h1>

<?php
	unset($_SESSION['name']) ;
	echo $_SESSION['nickname'] . "<br>" ;
?>

</body>
</html>