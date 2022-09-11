<?php require_once('connect.php'); ?>
<html>
<head>
<title>:: Add Employee Data ::</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body bgcolor=#3278ea>
<?php
	$sql = "INSERT INTO employee (EMP_ID, EMP_FNAME, EMP_LNAME, EMP_SEX, EMP_TEL, DEPT_ID) 
		VALUES ('".$_POST["emp_id"]."','".$_POST["emp_fname"]."','".$_POST["emp_lname"]."',
		'".$_POST["emp_sex"]."','".$_POST["emp_tel"]."','".$_POST["dept_id"]."')";

	$query = mysqli_query($conn,$sql);
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