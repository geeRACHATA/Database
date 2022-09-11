<html>
<head>
<title>:: Add Employee Data ::</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="mystyle.css">
<link href='https://fonts.googleapis.com/css?family=Noto Sans Thai' rel='stylesheet'>
</head>
<body bgcolor=#3278ea>
<center>
<form action="std_save.php" name="frmAdd" method="post">
  <br><br><a href="std_view.php">แสดงข้อมูลพนักงาน</a> | 
  <a href="std_add.php"> เพิ่มข้อมูลพนักงาน</a> | 
  <a href="std_view_edit.php"> แก้ไขข้อมูลพนักงาน</a> <br><br>
<table width="500" border="0">
  <tr>
    <th width="200" align="right">รหัสพนักงาน</th>
    <td width="300"><input type="text" name="emp_id" size="5"></td>
    </tr>
  <tr>
    <th width="200" align="right">ชื่อ</th>
    <td><input type="text" name="emp_fname" size="20"></td>
    </tr>
  <tr>
    <th width="200" align="right">นามสกุล</th>
    <td><input type="text" name="emp_lname" size="20"></td>
    </tr>
  <tr>
    <th width="200" align="right">เพศ</th>
    <td><input type="text" name="emp_sex" size="2"></td>
    </tr>
  <tr>
    <th width="200" align="right">เบอร์โทรศัพท์</th>
    <td><input type="text" name="emp_tel" size="5"></td>
    </tr>
  <tr>
    <th width="200" align="right">แผนกงาน</th>
    <td><input type="text" name="dept_id" size="5"></td>
    </tr>
  </table>
  <br>
  <input type="submit" name="submit" value="บันทึกข้อมูล">
  <input type="reset"  name="cancel" value="ยกเลิก">
</form>
</center>
</body>
</html>