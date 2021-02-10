<?php
    echo $_POST['m_id'].'<br>';
    echo $_POST['m_name'].'<br>';
    echo $_POST['m_day'].'<br>';
    echo $_POST['m_time'].'<br>';
require_once("dbcon.php");
$sql = "INSERT INTO movies (m_id, m_name,m_day,m_time)
VALUES ('{$_POST['m_id']}','{$_POST['m_name']}', '{$_POST['m_day']}','{$_POST['m_time']}}')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>