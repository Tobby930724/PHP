<?php
    # 設置錯誤報告級別為 0，即不顯示錯誤
    error_reporting(0);
   #啟動 PHP session
    session_start();
    #如果未設置 $_SESSION["id"] 變數，即未登入
    if (!$_SESSION["id"]) {
        #輸出請先登入的訊息
        echo "請先登入";
     # 使用 meta 標籤重新導向到指定的網址，延遲 3 秒後跳轉到登入頁面
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    }
    else{
      #輸出歡迎訊息及相應操作的連結
        echo "歡迎, ".$_SESSION["id"]." [<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        # 使用 mysqli_connect() 函式建立與資料庫的連結
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        #使用 mysqli_query() 函式從資料庫中查詢資料
        $result = mysqli_query($conn, "select * from bulletin");
        # 輸出佈告內容的表格
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
      # 使用 mysqli_fetch_array() 函式從查詢結果中一行一行地取出資料
        while ($row = mysqli_fetch_array($result)){
           # 輸出每一行佈告內容
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
       # 輸出表格的結束標籤
        echo "</table>";
    }
?>
