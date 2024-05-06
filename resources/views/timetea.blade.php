<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css">     -->
    <style>
    * {
        padding: 0;
        margin: 0;
    }
    body {
        margin: 0;
        padding-top: 40px;
    }
    .top {
        width: 100%;
        text-align: center;
        margin: auto;
        padding: 10px;
        overflow-x: auto;
        white-space: nowrap;
        align-items: center;
        justify-content: center;
        position: fixed;
        top: 0;
        background-color: rgb(224, 170, 239);
        font-family:Microsoft JhengHei;
        color: #393939;
    }
    .container {
        width: 100%;
        position: fixed;
        background: rgb(153, 153, 153);
    }
    .slide-wrapper .btn-list {
        display: grid;
        grid-template-columns: repeat(16, 1fr);
        gap: 10px;
        font-size: 0;
        overflow-x: auto;
    }
    .slide-wrapper .btn-list .btn-item {
        width: 100px;
        height: 80px;
        object-fit: cover;
        margin: 10px auto;
    }
    .slide-wrapper .btn-list .btn-item:hover {
        background-color: rgb(224, 170, 239);
    }
    .container2 {
        display: flex;
        margin-top: 115px;
        background: rgb(181, 181, 181);
        min-height: 477px;
    }
    .main-wrapper {
        width: 100%;
    }
    .item-list {
        display: flex;
        flex-wrap: wrap;
        font-size: 14px;
    }
    .item {
        width: 180px;
        height: 300px;
        background-color: #fff;
        margin: 20px 25px;
        padding: 10px;
        float: left;
        border: 1px solid;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .item-img {
        width: 100%;
        object-fit: cover;  /* 保持圖片比例並填充整個容器 */
    }
    .item > .st > h5:first-child {
        color: red;
    }
    .footer-text {
        height: 20px;
        font-size: 14px;
        text-align: center;
        background-color: #aaa;
        padding: 5px;
        margin-bottom: 40px;
    }
    .cart {
        width: 100%;
        margin: auto;
        padding: 10px;
        position: fixed;
        bottom: 0;
        background-color: rgb(224, 170, 239);
        font-family:Microsoft JhengHei;
        color: #393939;
        display: flex;
        justify-content: space-between; /* 使cart依父層平均分配寬度，需先設定display flex */
    }
    .cart>button {
        padding-right: 10px; /* 最右邊的購物車按鈕不知道為什麼被畫面切掉了，拉回來10px */
    }

    #shadow01, #shadow02, #shadow03 {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* 半透明黑色背景 */
    }
    #model01, #model02, #model03 {
        position: absolute;
        text-align: center;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border: 1px solid #000000;
        line-height: 50px; /* 設定1.5倍行距*/
        z-index: 2;
        box-shadow: 1px 1px 2px black; /* 設定box陰影製造小視窗之浮。現效果*/
    }
    .close-btn {
        float: right;
        margin-right: -10px;
        margin-top: -10px;
        width: 30px;
        height: 30px;
        background: #bbb;
        border: 1px solid #000;
        font-size: 20px;
        box-shadow: 2px 2px 2px black;
    }
    </style>
</head>
<body>
    <div class="top">
        食光茶旅輕食早午餐-總店
    </div>
    <div class="container">
        <div class="slide-wrapper">
            <div class="btn-list">
                <button class="btn-item" onclick="showMain('main01')">推薦商品</button>
                <button class="btn-item" onclick="showMain('main02')">食光、飲品</button>
                <button class="btn-item" onclick="showMain('main03')">茶茶手沖</button>
                <button class="btn-item" onclick="showMain('main04')">研磨咖啡</button>
                <button class="btn-item" onclick="showMain('main05')">食光經典套餐</button>
                <button class="btn-item" onclick="showMain('main06')">飯麵主食套餐</button>
                <button class="btn-item">麵包系列</button>
                <button class="btn-item">香煎蛋餅</button>
                <button class="btn-item">豐盛總匯</button>
                <button class="btn-item">中式餐點</button>
                <button class="btn-item">鐵板麵、烏龍麵</button>
                <button class="btn-item">甜蜜果醬</button>
                <button class="btn-item">鬆餅時光</button>
                <button class="btn-item">點心時光</button>
                <button class="btn-item">沙拉湯品</button>
                <button class="btn-item">重要公告</button>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="main-wrapper">
            <div class="item-list" id="item-list">

            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-text">
            <p>本網站僅為個人練習作品，請勿用於商業行為 © 2024</p>
        </div>
        <div class="cart">
            <p>購物車：1項商品</p>
            <button>購物車</button>
        </div>
    </div>
</body>

<script>
    function showMain(mainPage) {
        var xhr = new XMLHttpRequest();
        xhr.open('get', 'http://127.0.0.1:8000/'+mainPage);
        xhr.onload = function() { // 觸發load事件，連線完成
            var itemList = document.getElementById('item-list'); // 取得item-list這個div存進itemList變數
            itemList.innerHTML = this.responseText; // 將itemLst資料加進HTML區塊
        }
        xhr.send();
    }
    
    function showModel01(itemName) {
        document.getElementById('model01-title').innerText = itemName;
        document.getElementById('shadow01').style.display = 'block';
        document.body.style.overflow = 'hidden'; // 禁止背景滾動
        // 清空數量輸入框的值
        document.getElementById('quantity01').value = "1";
        // 其他你可能需要的清空操作...
    }
    function hideModel01() {
        document.getElementById('shadow01').style.display = 'none';
        document.body.style.overflow = 'auto'; // 恢復背景滾動

    }
    function addToCart01() {
        // 在這裡處理加入購物車的邏輯
        // 可以獲取選擇的飲料、冰熱、數量，然後執行相應的動作
        hideModel01();
    }

    function showModel02(itemName) {
        document.getElementById('model02-title').innerText = itemName;
        document.getElementById('shadow02').style.display = 'block';
        document.body.style.overflow = 'hidden'; // 禁止背景滾動
        // 清空數量輸入框的值
        document.getElementById('quantity02').value = "1";
        // 其他你可能需要的清空操作...
        document.getElementById('normalIce').checked = true;
        document.getElementById('zeroSugar').checked = true;

        // 判斷是否為豆漿
        if (itemName === '豆漿') {
            document.getElementById('iceOption').style.display = 'none';
            document.getElementById('iceOption2').style.display = 'block';
        } else {
            document.getElementById('iceOption').style.display = 'block';
            document.getElementById('iceOption2').style.display = 'none';
        }

        // 判斷是否為豆漿或鮮奶茶
        if (itemName === '豆漿' || itemName ==='鮮奶茶') {
            // 如果是豆漿或鮮奶茶，則隱藏甜度選項
            document.getElementById('sweetnessOptions').style.display = 'none';
        } else {
            // 如果不是豆漿或鮮奶茶，則顯示甜度選項
            document.getElementById('sweetnessOptions').style.display = 'block';
        }
    }
    function hideModel02() {
        document.getElementById('shadow02').style.display = 'none';
        document.body.style.overflow = 'auto'; // 恢復背景滾動
    }
    function addToCart02() {
        // 在這裡處理加入購物車的邏輯
        // 可以獲取選擇的飲料、冰熱、數量，然後執行相應的動作
        hideModel02();
    }

    function showModel03(itemName) {
        document.getElementById('model03-title').innerText = itemName;
        document.getElementById('shadow03').style.display = 'block';
        document.body.style.overflow = 'hidden'; // 禁止背景滾動
        // 清空數量輸入框的值
        document.getElementById('quantity03').value = "1";
        // 其他你可能需要的清空操作...
    }
    function hideModel03() {
        document.getElementById('shadow03').style.display = 'none';
        document.body.style.overflow = 'auto'; // 恢復背景滾動
    }
    function addToCart03() {
        // 在這裡處理加入購物車的邏輯
        // 可以獲取選擇的飲料、冰熱、數量，然後執行相應的動作
        hideModel03();
    }

</script>

</html>