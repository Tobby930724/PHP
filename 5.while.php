<?php
   #使用 mysqli_connect() 函式建立與資料庫的連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   
   # 使用 mysqli_query() 函式從資料庫中查詢資料
   $result = mysqli_query($conn, "select * from user");
   
  # 使用 mysqli_fetch_array() 函式從查詢結果中一行一行地取出資料
   while ($row = mysqli_fetch_array($result)) {
     # 輸出每一行資料的 id 和 pwd 欄位
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>
