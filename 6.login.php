<?php
   # 使用 mysqli_connect() 函式建立與資料庫的連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   
  #使用 mysqli_query() 函式從資料庫中查詢資料
   $result = mysqli_query($conn, "select * from user");
   
   # 使用 mysqli_fetch_array() 函式從查詢結果中一行一行地取出資料
   $login = FALSE;
   while ($row = mysqli_fetch_array($result)) {
     # 檢查帳號和密碼是否與資料庫中的任何一行匹配
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       # 如果匹配成功，設置登入狀態為真
       $login = TRUE;
     }
   } 
   
  # 檢查登入狀態並輸出相應的訊息
   if ($login == TRUE)
     echo "登入成功";
   else
     echo "帳號/密碼 錯誤";
?>
