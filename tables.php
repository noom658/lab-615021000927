<?php
    require_once("dbcon.php");
    $sql = "SELECT * FROM movies";
    if(isset($_GET['search_click'])) {
        $sql = "SELECT * FROM movies WHERE m_name LIKE '%{$_GET['search']}%'";
        echo "<p>คุณกำลังค้นหา : {$_GET['search']}</p>";
    }
    $result = $conn->query($sql);
?>
<form action="" method="get">
  <label for="search">ช่องค้นหา</label>
  <input type ="text" name = "search" id = "search">
  <button type="submit" name = "search_click">ค้นหา</button>
</form>
<table style="width:100%;" border="1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
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
  </tr>
  <?php 
  }
} else {
  echo "0 results";
  }
$conn->close();
?>
</table>
