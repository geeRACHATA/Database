<?php require_once('connect.php'); ?>
<html>
<head>
<title>:: Update Employee Data ::</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body bgcolor=#3278ea>
<?php

	$sql = "UPDATE employee SET 
			EMP_FNAME = '".$_POST["emp_fname"]."' ,
			EMP_LNAME = '".$_POST["emp_lname"]."' ,
			EMP_SEX = '".$_POST["emp_sex"]."' ,
			EMP_TEL = '".$_POST["emp_tel"]."' ,
			DEPT_ID = '".$_POST["dept_id"]."'
			WHERE EMP_ID = '".$_POST["emp_id"]."' ";
	$query = mysqli_query($conn,$sql);
	mysqli_close($conn);
	
	$updateGoTo = "std_view.php";
  	if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  	}
 	header(sprintf("Location: %s", $updateGoTo));
?>
</body>
</html>