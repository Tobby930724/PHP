<?php
    // 啟動會話（session）
    session_start();
    
    // 刪除名為 "id" 的會話變數，即清除用戶登入識別
    unset($_SESSION["id"]);
    
    // 顯示登出成功的訊息
    echo "登出成功....";
    
    // 重新導向到 2.login.html 頁面，延遲 3 秒後執行
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>
