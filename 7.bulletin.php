<?php
    # 設置錯誤報告級別為 0，即不顯示錯誤
    error_reporting(0);
   #使用 mysqli_connect() 函式建立與資料庫的連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    # 使用 mysqli_query() 函式從資料庫中查詢資料
    $result = mysqli_query($conn, "select * from bulletin");
    #輸出表格的開始標籤及表頭
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
  # 使用 mysqli_fetch_array() 函式從查詢結果中一行一行地取出資料
    while ($row = mysqli_fetch_array($result)){
        #輸出表格的每一行
        echo "<tr><td>";
        #輸出佈告編號
        echo $row["bid"];
        echo "</td><td>";
       # 輸出佈告類別
        echo $row["type"];
        echo "</td><td>"; 
        # 輸出標題
        echo $row["title"];
        echo "</td><td>";
        # 輸出佈告內容
        echo $row["content"]; 
        echo "</td><td>";
        #輸出發佈時間
        echo $row["time"];
        echo "</td></tr>";
    }
    #輸出表格的結束標籤
    echo "</table>"
?>
