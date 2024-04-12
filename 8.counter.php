<?php
   # 啟動 PHP session
    session_start();
   # 如果 $_SESSION["counter"] 變數未設置，則將其設置為 1
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"] = 1;
    else
        # 如果 $_SESSION["counter"] 變數已設置，則將其增加 1
        $_SESSION["counter"]++;

   # 輸出計數器的值
    echo "counter=" . $_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
