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
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   
   // 構建 SQL 語句，將表單提交的帳號和密碼插入到 user 表中
   $sql = "insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   
   // 執行 SQL 語句
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
這段程式碼的主要功能是：
