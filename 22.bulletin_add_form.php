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
        // 若使用者已登入，則顯示新增佈告的表單
        echo "
        <html>
            <head>
                <title>新增佈告</title>
            </head>
            <body>
                <form method=post action=23.bulletin_add.php>
                    標    題：<input type=text name=title><br>
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>
