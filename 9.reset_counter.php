<?php
   # 啟動 PHP session
    session_start();
   # 刪除 $_SESSION["counter"] 變數
    unset($_SESSION["counter"]);
   #輸出重置成功的訊息
    echo "counter重置成功....";
    #使用 meta 標籤重新導向到指定的網址，延遲 2 秒後跳轉
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>
