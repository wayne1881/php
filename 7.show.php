<?php
session_start();

if (!isset($_SESSION['id'])){    
   echo "請登入系統";
   echo "<meta http-equiv='refresh' content='3;url=login.html''>"; 
}else{
      echo "歡迎 {$_SESSION['id']} 登入<br> ";  
}

?>
