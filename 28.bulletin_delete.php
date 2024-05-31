<?php
    // 隱藏錯誤訊息
    error_reporting(0);
    // 啟動 session
    session_start();
    // 檢查是否有使用者登入，若無則顯示請登入訊息並導向登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {   
        // 連接到資料庫
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 建立 SQL 刪除語句，刪除指定佈告編號的佈告資訊
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        // 執行 SQL 刪除語句
        if (!mysqli_query($conn,$sql)){
            // 若刪除失敗，顯示錯誤訊息
            echo "佈告刪除錯誤";
        }
        else {
            // 若刪除成功，顯示成功訊息
            echo "佈告刪除成功";
        }
        // 在三秒後重新導向到佈告列表頁面
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    } 
?>
