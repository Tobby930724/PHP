<?php
    // 隱藏錯誤訊息
    error_reporting(0);
    // 啟動 session
    session_start();
    // 檢查是否有使用者登入，若無則導向登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {   
        // 連接到資料庫
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 構建 SQL 語句，刪除 id 為 GET 參數中指定的使用者帳號
        $sql="delete from user where id='{$_GET["id"]}'";
        // 執行 SQL 語句
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        // 三秒後重新導向到 18.user.php
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
