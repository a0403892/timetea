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
        text-align: center;
    }
    .cart>button {
        padding: 0 10px;
    }

    #shadow {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* 半透明黑色背景 */
    }
    #model {
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
    #cartwrapper {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* 半透明黑色背景 */
    } 
    #cartItems {
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
    .closecart {
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
                @foreach($foodClassData as $i)
                <button class="btn-item" onclick="showMain('main{{ $i->id }}')">{{ $i->classname }}</button>
                <!-- <button class="btn-item" onclick="showMain('main02')">食光、飲品</button>
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
                <button class="btn-item">重要公告</button> -->
                @endforeach
                <button class="btn-item">點心時光</button>
                <button class="btn-item">沙拉湯品</button>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="main-wrapper">
            <div class="item-list" id="item-list">

            </div>

            <!-- 彈出視窗 -->
            <div id="shadow">
                <div id="model">
                    <button class="close-btn" onclick="hideModel()">Ｘ</button>
                    <h2 id="model-title"></h2>
                    <hr>
                    <label for="quantity">數量：</label>
                    <!-- 在價格選擇的標籤處設置監聽事件，當調整時會依照數量變更價格 -->
                    <input type="number" id="quantity" value="1" min="1" oninput="updatePrice()"><br>
                    <hr>
                    <!-- 根據optionclass中的id，依序展示名稱及內容 -->
                    @foreach($optionData as $i)
                    <div id="option{{$i->id}}" data-option-id="{{$i->id}}" data-option-name="{{$i->optionname}}">
                        <label>{{$i->optionname}}</label>
                        @if($i->value1 != null)
                        <input type="radio" name="temp{{$i->id}}" value="{{$i->value1}}">
                        <label for="mark{{$i->id}}_1">{{$i->value1}}</label>
                        @endif
                        @if($i->value2 != null)
                        <input type="radio" name="temp{{$i->id}}" value="{{$i->value2}}">
                        <label for="mark{{$i->id}}_2">{{$i->value2}}</label>
                        @endif
                        @if($i->value3 != null)
                        <input type="radio" name="temp{{$i->id}}" value="{{$i->value3}}">
                        <label for="mark{{$i->id}}_3">{{$i->value3}}</label>
                        @endif
                        @if($i->value4 != null)
                        <input type="radio" name="temp{{$i->id}}" value="{{$i->value4}}">
                        <label for="mark{{$i->id}}_4">{{$i->value4}}</label>
                        @endif
                        @if($i->value5 != null)
                        <input type="radio" name="temp{{$i->id}}" value="{{$i->value5}}">
                        <label for="mark{{$i->id}}_5">{{$i->value5}}</label>
                        @endif
                        @if($i->value6 != null)
                        <input type="radio" name="temp{{$i->id}}" value="{{$i->value6}}">
                        <label for="mark{{$i->id}}_6">{{$i->value6}}</label>
                        @endif
                        <hr>
                    </div>
                    @endforeach
                    價格：<label for="price" id="priceLabel"></label>
                    <hr>
                    <button onclick="addToCart()">加入購物車</button>
                </div>
            </div>
        </div>
    </div>

    <div id="cartwrapper">
        <div id="cartItems">
            <button class="closecart" onclick="hideCart()">Ｘ</button>
            <h2>購物車商品清單</h2>
            <div id="cartItem"></div>
            <button onclick="submitCart()">送出購物車</button>
        </div>
    </div>
  

    <div class="footer">
        <div class="footer-text">
            <p>本網站僅為個人練習作品，請勿用於商業行為 © 2024</p>
        </div>
        <div class="cart">
            <!-- <p>購物車：1項商品</p> -->
            <button onclick="showCart()">購物車</button>
        </div>
    </div>
</body>

<script>
    // 從 URL 中獲取 tableNumber 參數的值
    var urlParams = new URLSearchParams(window.location.search);
    var tableNumber = urlParams.get('tableNumber');


    function showMain(mainPage) {
        var xhr = new XMLHttpRequest();
        xhr.open('get', 'http://127.0.0.1:8000/'+mainPage);
        xhr.onload = function() { // 觸發load事件，連線完成
            var itemList = document.getElementById('item-list'); // 取得item-list這個div存進itemList變數
            itemList.innerHTML = this.responseText; // 將itemLst資料加進HTML區塊
        }
        xhr.send();
    }
    
    // function showModel(itemName) {
    //     document.getElementById('model-title').innerText = itemName;
    //     document.getElementById('shadow01').style.display = 'block';
    //     document.body.style.overflow = 'hidden'; // 禁止背景滾動
    //     // 清空數量輸入框的值
    //     document.getElementById('quantity').value = "1";
    //     // 其他你可能需要的清空操作...
    // }

    function showModel(itemName, itemPrice, selectedOption) {
        // 將商品名稱設置到彈出視窗標題
        document.getElementById("model-title").innerText = itemName;
        // 跳出底層的陰影視窗
        document.getElementById('shadow').style.display = 'block';
        document.body.style.overflow = 'hidden'; // 禁止背景滾動
        // 清空數量輸入框的值
        document.getElementById('quantity').value = "1";
        // 將商品價格設置到彈出視窗價格標籤中
        document.getElementById("priceLabel").innerText = itemPrice;
        // 將固定價格保存為一個屬性，方便在updatePrice函數中使用
        document.getElementById("priceLabel").dataset.fixedPrice = itemPrice;
        // 將符合 selectedOption 中的數字的 div 顯示
        var optionDivs = document.querySelectorAll('[id^="option"]');
        optionDivs.forEach(function(optionDiv) {
            var optionId = optionDiv.id.replace('option', '');
            if (selectedOption.includes(optionId)) {
                optionDiv.style.display = 'block';
            } else {
                optionDiv.style.display = 'none';
            }
        });
    }

    function updatePrice() {
        var quantity = document.getElementById("quantity").value;
        var itemPrice = parseInt(document.getElementById("priceLabel").dataset.fixedPrice); // 取得商品價格
        var totalPrice = quantity * itemPrice;
        document.getElementById("priceLabel").innerText = totalPrice; // 顯示新的總價格
    }

    // 設定全域變數用來存儲購物車中的商品
    var cart = [];
    // 將商品添加到購物車中
    function addToCart() {
        var optionValues = []; // 單品的optionname內的value
        var optionLabels = []; // 用來設定當radio button未勾選時，會加入此陣列用來顯示alert訊息
        var missingOptions = '';
        // 選擇所有ID開頭為option的HTML元素
        var optionDivs = document.querySelectorAll('[id^="option"]');

        optionDivs.forEach(function(optionDiv) {
            var optionId = optionDiv.dataset.optionId;
            var optionName = optionDiv.dataset.optionName;
            var checkedInput = optionDiv.querySelector('input[name="temp' + optionId + '"]:checked');
            // 當optionname的項目內的value沒有選擇時，就把optionName加入optionLabels陣列
            // 當該對應的div展示為none時，就不把optionName加入optionLabels陣列
            if (optionDiv.style.display !== 'none' && !checkedInput) {
                optionLabels.push(optionName);
            }

            // 獲取該選項組中選中的radio button的值
            // 有被選的話就是checkedInput的值，沒被選到的話就是null
            var selectedValue = checkedInput ? checkedInput.value : null;
            // 將值儲存在optionValues陣列中
            if(selectedValue) {
                optionValues.push(selectedValue);
            }
        });
        
        if (optionLabels.length > 0) {
            missingOptions = '請選擇' + optionLabels.join('、');
            alert(missingOptions);
            return;
        }

        // 如果所有選項都已經選擇，則加入購物車
        var itemName = document.getElementById('model-title').textContent;
        var quantity = document.getElementById('quantity').value;
        var price = document.getElementById('priceLabel').textContent;
        var mark = optionValues.join(' ');  // 將optionValues陣列的字以空白鍵隔開 存入mark字串
        var item = { name: itemName, quantity: quantity, price: price, mark: mark};
        cart.push(item);
        hideModel();
        updateCartView();

        // 將所有的radio button設為未選取狀態
        // radio button雖然在視窗中看不到，實際上還是存在於視圖中
        // 要把radio button的值清空，這樣在加入mark的時候才不會一直累加前面出現過的字串
        // 找了好久終於發現原因
        optionDivs.forEach(function(optionDiv) {
            var optionId = optionDiv.dataset.optionId;
            var radioButtons = optionDiv.querySelectorAll('input[name="temp' + optionId + '"]');
            radioButtons.forEach(function(radioButton) {
                radioButton.checked = false;
            });
        });
    }


    // 設定一個全域變數，在購物車外也可以讀取總價，用來上傳資料庫用
    var cartTotal = 0;

    // 更新購物車視圖
    function updateCartView() {
        var cartItemsContainer = document.getElementById("cartItem");
        cartItemsContainer.innerHTML = ""; // 清空原來的內容
        var totalPrice = 0;

        // 逐個添加購物車中的商品
        cart.forEach(function(item, index) {
            var itemDiv = document.createElement("div");
            itemDiv.classList.add('itemobj');
            itemDiv.innerHTML = "<strong>商品名稱:</strong> " + item.name + " | <strong>數量:</strong> " + item.quantity + " | <strong>價格:</strong> $" + item.price;

            // 在每個商品項目後面新增一個刪除按鈕
            var deleteButton = document.createElement('button');
            deleteButton.textContent = '刪除';
            deleteButton.classList.add('delete-item');

            deleteButton.addEventListener('click', function() {
                // 點擊刪除按鈕時，從購物車中刪除相應的項目
                removeFromCart(index);
            });
            itemDiv.appendChild(deleteButton);

            cartItemsContainer.appendChild(itemDiv);
            totalPrice += parseFloat(item.price);
        });

        // 添加商品總價格
        var totalPriceDiv = document.createElement("div");
        totalPriceDiv.innerHTML = "<strong>商品總價:</strong> $" + totalPrice;
        cartItemsContainer.appendChild(totalPriceDiv);

        cartTotal = totalPrice;
    }

    // 從購物車中刪除指定索引的商品項目
    function removeFromCart(index) {
        cart.splice(index, 1); // 刪除指定索引的商品項目
        updateCartView(); // 更新購物車視圖
    }

    function showCart() {
        document.getElementById("cartwrapper").style.display = "block"; // 顯示購物車視窗
    }

    function hideCart() {
        document.getElementById("cartwrapper").style.display = "none"; // 關閉購物車視窗
    }

    function hideModel() {
        // 選擇所有ID開頭為option的HTML元素
        var optionDivs = document.querySelectorAll('[id^="option"]');
        optionDivs.forEach(function(optionDiv) {
            var optionId = optionDiv.dataset.optionId;
            var radioButtons = optionDiv.querySelectorAll('input[name="temp' + optionId + '"]');
            radioButtons.forEach(function(radioButton) {
                radioButton.checked = false;
            });
        });
        document.getElementById('shadow').style.display = 'none';
        document.body.style.overflow = 'auto'; // 恢復背景滾動
    }

    // function getSelectedTemp() {
    //     var radios = document.getElementsByName('temp');
    //     for (var i = 0; i < radios.length; i++) {
    //         if (radios[i].checked) {
    //             return radios[i].value;
    //         }
    //     }
    //     return null; // 如果沒有選中任何按鈕，回傳null
    // }

    // function submitCart2() {
    //     // 將購物車數據存儲在本地存儲中
    //     localStorage.setItem('cart', JSON.stringify(cart)); 
    //     // 重定向到新的頁面
    //     window.location.href = "/submit";
    // }

    function submitCart() {
        // 將購物車數據轉換為 JSON 字串
        var cartData = JSON.stringify(cart);
        // 將 cartTotal 添加到每個項目中
        var parsedCart = JSON.parse(cartData);
        parsedCart.forEach(function(item) {
            item.cartTotal = cartTotal;
        });

        // 獲取網址中的 tableNumber 參數值
        var urlParams = new URLSearchParams(window.location.search);
        var tableParam = urlParams.get('tableNumber');

        // 將 tableNumber 參數添加到購物車數據中
        parsedCart.forEach(function(item) {
            item.tableNumber = tableParam;
        });

        // // 定義一個對象來存儲選中的值
        // var selectedValues = {};
        // // 遍歷每個 option 的 radio button
        // // 獲取所有以 "option" 開頭的 div 元素的總數量
        // var totalOptions = document.querySelectorAll('[id^="option"]').length;
        // for (var i = 1; i <= totalOptions; i++) {
        //     // 獲取具有 name 屬性為 "temp" + i 的所有 radio button
        //     var radioButtons = document.querySelectorAll('input[name="temp' + i + '"]');
        //     // 遍歷每個 radio button
        //     for (var j = 0; j < radioButtons.length; j++) {
        //         var radioButton = radioButtons[j];
        //         // 如果該 radio button 被選中，將其值添加到 selectedValues 中
        //         if (radioButton.checked) {
        //             selectedValues['temp' + i] = radioButton.value;
        //             break; // 停止遍歷，因為只有一個 radio button 能被選中
        //         }
        //     }
        // }

        // // 獲取 selectedValues 對象中的所有值並將它們組合成一個字符串
        // var combinedMark = Object.values(selectedValues).join(' ');

        // // 將組合後的 mark 字符串添加到每個項目中
        // parsedCart.forEach(function(item) {
        //     item.mark = combinedMark;
        // });

        // 將更新後的購物車數據重新轉換為 JSON 字串
        cartData = JSON.stringify(parsedCart);

        console.log(cartData);
        console.log(parsedCart);
        console.log(cartTotal);

        // 使用 Fetch API 發送 POST 請求到後端控制器
        // 後端路由設定為 submitCartData
        fetch('/submitCartData', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Laravel 驗證所需的 CSRF token
            },
            body: cartData // 將購物車數據作為請求主體發送
        }).then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log(data); // 處理從後端收到的響應
            // 清空購物車視窗的所有資料
            document.getElementById('cartItem').innerHTML = '';
            hideCart();
            // submitCartView();
            cart = [];
            alert ('送出購物車成功');
        })
        .catch(error => {
            console.error('There was a problem with your fetch operation:', error);
        });
    }


    // 更新購物車視圖
    function submitCartView() {
        // 重定向到新的頁面
        // window.location.href = "/submit";
        
        // 將 tableNumber 顯示在視圖中
        var tableNumberDisplay = document.getElementById('tableNumberDisplay');
        tableNumberDisplay.textContent = 'Hello ' + tableNumber + '號桌';

        var cartItemsContainer = document.getElementById("cartItem");
        var cartTitlesContainer = document.getElementById("cartTitle");
        var cartSubmitsContainer = document.getElementById("cartSubmit");
        // var closecartContainer = document.getElementById("closecart");
        cartItemsContainer.innerHTML = ""; // 清空原來的內容
        cartTitlesContainer.innerHTML = ""; // 清空原來的內容
        cartSubmitsContainer.innerHTML = ""; // 清空原來的內容
        // closecartContainer.innerHTML = ""; // 清空原來的內容
        var totalPrice = 0;

        // 逐個添加購物車中的商品
        cart.forEach(function(item) {
            var itemDiv = document.createElement("div");
            itemDiv.classList.add('itemobj');
            itemDiv.innerHTML = "<strong>商品名稱:</strong> " + item.name + " | <strong>數量:</strong> " + item.quantity + " | <strong>價格:</strong> $" + item.price + "</br><small>" + item.mark +"</small>";

            cartItemsContainer.appendChild(itemDiv);
            totalPrice += parseFloat(item.price);
        });

        // 添加商品總價格
        var totalPriceDiv = document.createElement("div");
        totalPriceDiv.innerHTML = "<strong>商品總價:</strong> $" + totalPrice;
        cartItemsContainer.appendChild(totalPriceDiv);

        cartTotal = totalPrice;
    }


    // function addToCart01() {
    //     // 在這裡處理加入購物車的邏輯
    //     // 可以獲取選擇的飲料、冰熱、數量，然後執行相應的動作
    //     hideModel();
    // }

    // function showModel02(itemName) {
    //     document.getElementById('model02-title').innerText = itemName;
    //     document.getElementById('shadow02').style.display = 'block';
    //     document.body.style.overflow = 'hidden'; // 禁止背景滾動
    //     // 清空數量輸入框的值
    //     document.getElementById('quantity02').value = "1";
    //     // 其他你可能需要的清空操作...
    //     document.getElementById('normalIce').checked = true;
    //     document.getElementById('zeroSugar').checked = true;

    //     // 判斷是否為豆漿
    //     if (itemName === '豆漿') {
    //         document.getElementById('iceOption').style.display = 'none';
    //         document.getElementById('iceOption2').style.display = 'block';
    //     } else {
    //         document.getElementById('iceOption').style.display = 'block';
    //         document.getElementById('iceOption2').style.display = 'none';
    //     }

    //     // 判斷是否為豆漿或鮮奶茶
    //     if (itemName === '豆漿' || itemName ==='鮮奶茶') {
    //         // 如果是豆漿或鮮奶茶，則隱藏甜度選項
    //         document.getElementById('sweetnessOptions').style.display = 'none';
    //     } else {
    //         // 如果不是豆漿或鮮奶茶，則顯示甜度選項
    //         document.getElementById('sweetnessOptions').style.display = 'block';
    //     }
    // }
    // function hideModel02() {
    //     document.getElementById('shadow02').style.display = 'none';
    //     document.body.style.overflow = 'auto'; // 恢復背景滾動
    // }
    // function addToCart02() {
    //     // 在這裡處理加入購物車的邏輯
    //     // 可以獲取選擇的飲料、冰熱、數量，然後執行相應的動作
    //     hideModel02();
    // }

    // function showModel03(itemName) {
    //     document.getElementById('model03-title').innerText = itemName;
    //     document.getElementById('shadow03').style.display = 'block';
    //     document.body.style.overflow = 'hidden'; // 禁止背景滾動
    //     // 清空數量輸入框的值
    //     document.getElementById('quantity03').value = "1";
    //     // 其他你可能需要的清空操作...
    // }
    // function hideModel03() {
    //     document.getElementById('shadow03').style.display = 'none';
    //     document.body.style.overflow = 'auto'; // 恢復背景滾動
    // }
    // function addToCart03() {
    //     // 在這裡處理加入購物車的邏輯
    //     // 可以獲取選擇的飲料、冰熱、數量，然後執行相應的動作
    //     hideModel03();
    // }

</script>

</html>