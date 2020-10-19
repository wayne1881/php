<?php

session_start();
//將session清空
session_unset();
echo '登出中......';
echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';

?>