<html>
    <head>
        <title>使用者管理</title>
    </head>
    <body>
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
            // 顯示頁面標題和連結
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            // 連接到資料庫並從 user 表中獲取所有使用者資訊
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from user");
            // 逐行顯示使用者資訊，並提供修改和刪除連結
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
