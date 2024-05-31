<html>
    <head>
        <title>修改使用者</title>
    </head>
    <body>
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
        // 從資料庫中取得指定 id 的使用者資訊
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);
        // 顯示修改使用者表單，包含帳號和密碼欄位
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
