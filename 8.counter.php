<?php
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
html是靜態網頁，無法跨網頁紀錄狀態
『某甲』已經登入成功，如何紀錄登入狀態，使得在其他網頁不須一直重複登入?
利用php的session變數
session變數會儲存在網頁伺服器(跟cookie儲存在瀏覽器剛好相反)，除非被清除(或者超過使用期限)，不然不會消失
可判斷session變數之值，來決定使用者是否登入成功
要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
$_SESSION['變數'] = 值。設定Session變數
unset($_SESSION['變數'])
session_unset() 或者session_destroy()也可以達成同樣功能
8.counter.php
可嘗試把session_start():註解，比較有何不同
把login加上session功能，紀錄登入帳號
