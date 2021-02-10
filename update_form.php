<?php echo $_GET['id'];
 require_once("dbcon.php");
$sql = "SELECT * FROM movies WHERE m_id = '{$_GET['id']}'";
$result = $conn->query($sql);
if($result->num_rows > 0 ) {
    $row = $result->fetch_assoc();
}
?>
<h3>แก้ไขภาพยนต์ <small> <a href = ".">ย้อนกลับ</a></h3>
<form action="update.php" method="post">
    <label for="m_id">รหัสภาพยนต์</label>
    <?php echo $row['m_id'];?>
    <input type = "hidden" name = "m_id" id = "m_id" value ="<?php echo $row['m_id'];?>">
    <br><br>
    <label for="m_id">ชื่อภาพยนต์</label>
    <input type ="text" name = "m_name" id ="m_name"value ="<?php echo $row['m_name'];?>">
    <br><br>
    <label for="m_id">วัน/เดือน/ปี</label>
    <input type ="date" name = "m_day" id ="m_day"value ="<?php echo $row['m_day'];?>">
    <br><br>
    <label for="m_id">เวลา</label>
    <input type ="time" name = "m_time" id ="m_time"value ="<?php echo $row['m_time'];?>">
    <br><br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>