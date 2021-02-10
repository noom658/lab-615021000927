<?php
    require_once("dbcon.php");
    if(isset($_GET['delete'])){
        echo $_GET['id'];
        $sql = "DELETE FROM movies WHERE m_id = '{$_GET['id']}'";
        if (mysqli_query($conn, $sql)) {
          echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . mysqli_error($conn);
        }
      }
    $sql = "SELECT * FROM movies";
    if(isset($_GET['search_click'])) {
        $sql = "SELECT * FROM movies WHERE m_name LIKE '%{$_GET['search']}%'";
        echo "<p>คุณกำลังค้นหา : {$_GET['search']}</p>";
    }
    $result = $conn->query($sql);
?>
<a href ="insert_form.php">เพิ่มภาพยนต์</a>
<form action="" method="get">
  <label for="search">ช่องค้นหา</label>
  <input type ="text" name = "search" id = "search">
  <button type="submit" name = "search_click">ค้นหา</button>
</form>
<table style="width:100%;" border="1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
    <th>วันที่เริ่มฉาย</th>
    <th>เวลาที่เริ่มฉาย</th>
  </tr>
  <?php
  if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $row['m_id'];?></td>
    <td><?php echo $row['m_name'];?></td>
    <td><?php echo $row['m_day'];?></td>
    <td><?php echo $row['m_time'];?></td>
    <td align = "center">
        <a href ="update_form.php?id=<?php echo $row['m_id']; ?>">แก้ไข</a>
      <a href ="?delete=1&id=<?php echo $row['m_id']; ?>">ลบ</a>
    </td>
  </tr>
  <?php 
  }
} else {
  echo "0 results";
  }
$conn->close();
?>
</table>
