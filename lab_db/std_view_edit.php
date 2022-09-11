<?php require_once('connect.php'); ?>
<html>
<head>
<title>:: View Employee Data ::</title>
<link rel="stylesheet" href="mystyle.css">
<link href='https://fonts.googleapis.com/css?family=Noto Sans Thai' rel='stylesheet'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body bgcolor=#3278ea>
<center>
<a href="std_view.php"> แสดงข้อมูลพนักงาน</a> | 
  <a href="std_add.php"> เพิ่มข้อมูลพนักงาน </a> | 
  <a href="std_view_edit.php"> แก้ไขข้อมูลพนักงาน</a> <br><br>

  <?php
      $strKeyword = null;
      if(isset($_POST["txtKeyword"]))
      $strKeyword = $_POST["txtKeyword"];
  ?>
  <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
    <table width="599" border="0">
      <tr>
        <th>ป้อนคำค้นหา
        <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
        <input type="submit" value="ค้นหา"></th>
      </tr>
    </table>
  </form>
  
<?php
  $sql = "select * from employee join department on employee.DEPT_ID = department.DEPT_ID where 
  EMP_ID LIKE '%".$strKeyword."%' OR
  EMP_FNAME LIKE '%".$strKeyword."%' OR
  EMP_LNAME LIKE '%".$strKeyword."%' OR
  EMP_SEX LIKE '%".$strKeyword."%' OR
  EMP_TEL LIKE '%".$strKeyword."%' OR
  DEPT_NAME LIKE '%".$strKeyword."%' ";
  $query = mysqli_query($conn,$sql);
?>

<table id = "customers">
  <tr bgcolor=#ffccff>
      <th>ลบข้อมูล</th>
      <th>รหัสพนักงาน</th>
      <th>ชื่อ-นามสกุล</th>
      <th>เพศ</th>
      <th>เบอร์โทรศัพท์</th>
      <th>แผนกงาน</th>
      <th>แก้ไข้อมูล</th>
  </tr>
<?php
      while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
          {
          if($row["EMP_SEX"]=="ชาย") $title_name = "นาย";
          if($row["EMP_SEX"]=="หญิง") $title_name = "นางสาว";
?>
  <tr>

      <td align = center><a href = "JavaScript:if(confirm('Confirm Delete?')==true)
        {window.location='std_del.php?EMP_ID=<?php echo $row["EMP_ID"];?>';}"><i class='fas fa-trash-alt' style='font-size:24px;color:red'></i></a></td>
      <td align = center><b><?php echo $row["EMP_ID"];?></b></td> 
      <td>&nbsp;&nbsp;<?php echo "".$title_name."".$row["EMP_FNAME"]."&nbsp;&nbsp;".$row["EMP_LNAME"];?></td>
      <td align = center><?php echo $row["EMP_SEX"];?></td>
      <td align = center><?php echo $row["EMP_TEL"];?></td>
      <td>&nbsp;&nbsp;<?php echo $row["DEPT_NAME"];?></td>
      <td align = center><a href = "std_update.php?EMP_ID=<?php echo $row["EMP_ID"];?>"><i class='fas fa-edit' style='font-size:24px;color:blue'></i></a></td>
  </tr>

<?php } ?>
</table>
<?php mysqli_close($conn); ?>
<br>
</body>
</html>