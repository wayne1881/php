<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>
把login加上session功能，紀錄登入帳號
把佈告欄顯示加上登入判斷
登出功能
