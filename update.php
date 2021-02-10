<h1>อัปเดตภาพยนต์เรียบร้อย </h1>
<?php
   require_once("dbcon.php");
   $sql = "UPDATE movies SET
            m_name = '{$_POST['m_name']}',
            m_day = '{$_POST['m_day']}',
            m_time = '{$_POST['m_time']}'
            WHERE m_id = '{$_POST['m_id']}' ";
   if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
   $conn->close();
?>