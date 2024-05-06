    <!-- 彈出視窗 -->
    <div id="drinkModel">
        <h2 id="drinkTitle"></h2>
        <label>冰熱：</label>
        <input type="radio" id="normalIce" name="temperature" value="正常" checked>
        <label for="ice">正常</label>
        <input type="radio" id="halfIce" name="temperature" value="少冰">
        <label for="ice">少冰</label>
        <input type="radio" id="littleIce" name="temperature" value="微冰">
        <label for="ice">微冰</label>
        <input type="radio" id="noIce" name="temperature" value="去冰">
        <label for="hot">去冰</label><br>
        <input type="radio" id="warm" name="temperature" value="溫">
        <label for="ice">溫</label>
        <input type="radio" id="hot" name="temperature" value="熱">
        <label for="ice">熱</label>
        <br>
        <div id="sweetnessOptions" class="hidden">
            <label>甜度：</label>
            <input type="radio" id="zeroSugar" name="sweetness" value="無糖" checked>
            <label for="zeroSugar">無糖</label>
            <input type="radio" id="halfSugar" name="sweetness" value="半糖">
            <label for="halfSugar">半糖</label>
            <input type="radio" id="normalSugar" name="sweetness" value="正常">
            <label for="normalSugar">正常</label>
        </div>

        <label for="quantity">數量：</label>
        <input type="number" id="quantity" value="1" min="1"><br>
        <button onclick="addToCart()">加入購物車</button>
        <button onclick="hideModel()">關閉</button>
    </div>