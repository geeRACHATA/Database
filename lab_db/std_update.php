<?php require_once('connect.php'); ?>
<html>
<head>
<title>:: Update Employee Data ::</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="mystyle.css">
<link href='https://fonts.googleapis.com/css?family=Noto Sans Thai' rel='stylesheet'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body bgcolor=#3278ea>
<?php
	   $strEMP_ID = null;
	   if(isset($_GET["EMP_ID"]))
	   {
		   $strEMP_ID = $_GET["EMP_ID"];
	   }
	   $sql = "SELECT * FROM employee WHERE EMP_ID = '".$strEMP_ID."' ";
	   $query = mysqli_query($conn,$sql);
	   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<form action="std_update_save.php" name="frmUpdate" method="post">
<center>
<br><br><a href="std_view.php"> แสดงข้อมูลพนักงาน</a> | 
  <a href="std_add.php"> เพิ่มข้อมูลพนักงาน </a> | 
  <a href="std_view_edit.php"> แก้ไขข้อมูลพนักงาน</a> <br><br>

<table width="500" border="0">
  <tr>
    <th width="200" align="right">รหัสพนักงาน</th>
    <td width="300"><input type="hidden" name="emp_id" size="5" value="<?php echo $result["EMP_ID"];?>"><?php echo $result["EMP_ID"];?></td>
    </tr>
  <tr>
    <th width="200" align="right">ชื่อ</th>
    <td><input type="text" name="emp_fname" size="20" value="<?php echo $result["EMP_FNAME"];?>"></td>
    </tr>
  <tr>
    <th width="200" align="right">นามสกุล</th>
    <td><input type="text" name="emp_lname" size="20" value="<?php echo $result["EMP_LNAME"];?>"></td>
    </tr>
  <tr>
    <th width="200" align="right">เพศ</th>
    <td><input type="text" name="emp_sex" size="2" value="<?php echo $result["EMP_SEX"];?>"></td>
    </tr>
  <tr>
    <th width="200" align="right">เบอร์โทรศัพท์</th>
    <td><input type="text" name="emp_tel" size="15" value="<?php echo $result["EMP_TEL"];?>"></td>
    </tr>
  <tr>
    <th width="200" align="right">แผนกงาน</th>
    <td><input type="text" name="dept_id" size="5" value="<?php echo $result["DEPT_ID"];?>"></td>
    </tr>
  </table>
  <br>
  <input type="submit" name="submit" value="บันทึกข้อมูล">
  <input type="reset"  name="cancel" value="ยกเลิก">
</center>
</form>
</body>
</html>