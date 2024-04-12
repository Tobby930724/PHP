<?php
  # 使用 mysqli_connect() 函式建立與資料庫的連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
 # 使用 mysqli_query() 函式從資料庫中查詢資料
   $result = mysqli_query($conn, "select * from user");
  #使用 mysqli_fetch_array() 函式從查詢結果中一行一行地取出資料
   $login = FALSE;
   while ($row = mysqli_fetch_array($result)) {
    # 檢查帳號和密碼是否與資料庫中的任何一行匹配
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       # 如果匹配成功，設置登入狀態為真
       $login = TRUE;
     }
   } 
   
  # 如果登入成功
   if ($login == TRUE) {
    # 啟動 PHP session
    session_start();
    # 將使用者 ID 存入 session 中
    $_SESSION["id"] = $_POST["id"];
    # 輸出登入成功的訊息
    echo "登入成功";
   # 使用 meta 標籤重新導向到指定的網址，延遲 3 秒後跳轉到佈告欄頁面
    echo "<meta http-equiv=REFRESH content='3; url=11.bulletin.php'>";
   }

 # 如果登入失敗
  else {
   # 輸出帳號/密碼錯誤的訊息
    echo "帳號/密碼 錯誤";
   # 使用 meta 標籤重新導向到指定的網址，延遲 3 秒後跳轉到登入頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
  }
?>
