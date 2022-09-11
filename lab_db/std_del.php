<?php require_once('connect.php'); ?>
<html>
<head>
<title>:: Delete Employee Data ::</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body bgcolor=#3278ea>
<?php

	$strEMP_ID = $_GET["EMP_ID"];
	$sql = "DELETE FROM employee
			WHERE EMP_ID = '".$strEMP_ID."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "Record delete successfully";
	}

	mysqli_close($conn);

	$insertGoTo = "std_view_edit.php";
  	if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  	}
 	header(sprintf("Location: %s", $insertGoTo));
?>
</body>
</html>