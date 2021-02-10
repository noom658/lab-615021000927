<h3>เพิ่มภาพยนต์ <small> <a href = ".">ย้อนกลับ</a></h3>
<form action="insert.php" method="post">
    <label for="m_id">รหัสภาพยนต์</label>
    <input type ="text" name = "m_id" id ="m_id">
    <br><br>
    <label for="m_id">ชื่อภาพยนต์</label>
    <input type ="text" name = "m_name" id ="m_name">
    <br><br>
    <label for="m_id">วัน/เดือน/ปี</label>
    <input type ="date" name = "m_day" id ="m_day">
    <input type ="time" name = "m_time" id ="m_time">
    <br><br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>