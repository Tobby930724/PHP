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
        // 嘗試執行 SQL 更新語句，更新指定佈告編號的佈告資訊
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            // 若更新失敗，顯示錯誤訊息並在三秒後重新導向到佈告列表頁面
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
        else {
            // 若更新成功，顯示成功訊息並在三秒後重新導向到佈告列表頁面
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
