<!DOCTYPE html>
<html>
<head>
    <title>明新科技大學資訊管理系</title>
    <meta charset="utf-8">
    <!-- 引入外部 CSS 和 JavaScript 檔案 -->
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
    <script>
        // 使用 jQuery 的 ready() 方法，在 DOM 載入完成後執行以下程式碼
        $(document).ready(function() {
            // 使用 flexslider 套件來建立輪播效果
            $('.flexslider').flexslider({
                animation: "slide", // 設定輪播動畫效果為滑動
                rtl: true // 設定輪播從右向左
            });
        });
    </script>
    <!-- CSS 樣式表 -->
    <style>
        /* CSS 樣式 */
        /* 全域樣式 */
        /* 請注意此處省略了一些樣式設定，你可以根據需要自行修改 */
    </style>
</head>
<body>
    <!-- 頁面內容 -->
    <div class="top">
        <!-- 頁面頂部 -->
        <!-- 包含標誌和導航 -->
    </div>
    <div class="nav">
        <!-- 頁面導航欄 -->
    </div>
    <div class="slider">
        <!-- 輪播圖片 -->
    </div>
    <div class="bulletin">
        <!-- 佈告欄 -->
        <!-- 使用 PHP 輸出佈告欄內容 -->
    </div>
    <div class="banner" id="introduction">
        <!-- 簡介標題 -->
    </div>
    <div class="faculty" id="faculty">
        <!-- 教師介紹 -->
    </div>
    <div class="contact" id="about">
        <!-- 聯繫資訊 -->
    </div>
    <div class="footer">
        <!-- 頁腳 -->
    </div>
</body>
</html>
