<?php
    // 隱藏錯誤訊息
    error_reporting(0);
    // 啟動 session
    session_start();
    // 檢查是否有使用者登入，若無則顯示請登入訊息並導向登入頁面
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        // 若使用者已登入，則連接到資料庫
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 構建 SQL 語句，插入佈告資訊到 bulletin 表中
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        // 執行 SQL 語句
        if (!mysqli_query($conn, $sql)){
            // 若新增失敗，顯示錯誤訊息
            echo "新增命令錯誤";
        }
        else {
            // 若新增成功，顯示成功訊息並在三秒後重新導向到佈告列表頁面
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
