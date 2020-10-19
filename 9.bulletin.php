<?php
session_start();

if (!isset($_SESSION['id'])){    
   echo "請登入系統";
   echo "<meta http-equiv='refresh' content='3;url=login.html''>"; 
}else{
      echo "歡迎 {$_SESSION['id']} 登入 <a href=logout.php>[登出]</a><br> "; 
      $conn = mysqli_connect("localhost", "root", "", "mydb");
      if (mysqli_connect_error($conn))
         die("連線資料庫錯誤");
      mysqli_set_charset($conn, "utf8");  
      $result=mysqli_query($conn, "select * from bulletin");
      echo "<table border=1><tr><td>bid</td><td>佈告型態</td><td>佈告標題</td><td>佈告內容</td><td>發布日期</td></tr>";
      while ($row=mysqli_fetch_array($result)) {
           echo "<tr><td>$row[bid]</td><td>$row[type]</td><td>$row[title]</td><td>$row[content]</td><td>$row[time]</td></tr>";
      }
      echo "</table>" ;    
      






}

?>
