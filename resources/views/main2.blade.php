@foreach($Food2 as $i)
<div class="item" onclick="showModel('{{ $i->itemname }}', '{{ $i->itemprice }}', '{{ $i->selectedoption }}')">
    @if(file_exists(public_path('pic/food2/' . $i->id . '.jpg')))
    <img src="pic/food2/{{ $i->id }}.jpg" alt="" class="item-img">
    @else
    <img src="pic/null.jpg" alt="" class="item-img">
    @endif
    <h2>{{ $i->itemname }}</h2>
    <div class="st">
        <h5>${{ $i->itemprice }}</h5>
    </div>
</div>
@endforeach
<!-- 
<div class="item" onclick="showModel02('紅茶')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>紅茶</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div>
<div class="item" onclick="showModel02('奶茶')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>奶茶</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div>
<div class="item" onclick="showModel02('冰釀綠茶')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>冰釀綠茶</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div>
<div class="item" onclick="showModel02('豆漿')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>豆漿</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div>
<div class="item" onclick="showModel02('鮮奶茶')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>鮮奶茶</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div>
<div class="item" onclick="showModel02('可可牛奶')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>可可牛奶</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div>
<div class="item" onclick="showModel02('薰衣草奶茶')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>薰衣草奶茶</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div>
<div class="item" onclick="showModel02('山藥薏仁漿')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>山藥薏仁漿</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div>
<div class="item" onclick="showModel02('100%柳橙汁')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>100%柳橙汁</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div>
<div class="item" onclick="showModel02('國農牛乳')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>國農牛乳</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div>
<div class="item" onclick="showModel02('焦糖奶茶')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>焦糖奶茶</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div>
<div class="item" onclick="showModel02('可樂')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>可樂</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$20</h5>
    </div>
</div> -->

<!-- 彈出視窗 -->
<!-- <div id="shadow">
    <div id="model">
        <button class="close-btn" onclick="hideModel02()">Ｘ</button>
        <h2 id="model02-title"></h2>
        <hr>
        <label for="quantity">數量：</label>
        <input type="number" id="quantity02" value="1" min="1"><br>
        <hr>
        <div id="iceOption">
            <label>冰熱：</label>
            <input type="radio" id="normalIce" name="temperature" value="正常">
            <label for="ice">正常</label>
            <input type="radio" id="halfIce" name="temperature" value="少冰">
            <label for="ice">少冰</label>
            <input type="radio" id="littleIce" name="temperature" value="微冰">
            <label for="ice">微冰</label>
            <input type="radio" id="noIce" name="temperature" value="去冰">
            <label for="hot">去冰</label>
            <input type="radio" id="warm" name="temperature" value="溫">
            <label for="ice">溫</label>
            <input type="radio" id="hot" name="temperature" value="熱">
            <label for="ice">熱</label>
            <hr>
        </div>
        豆漿冰塊選擇 -->
        <!-- <div id="iceOption2">
            <label>冰熱：</label>
            <input type="radio" id="noIce" name="temperature" value="去冰">
            <label for="hot">去冰</label>
            <input type="radio" id="warm" name="temperature" value="溫">
            <label for="ice">溫</label>
            <input type="radio" id="hot" name="temperature" value="熱">
            <label for="ice">熱</label>
            <hr>
        </div>
        <div id="sweetnessOptions">
        <label>甜度：</label>
            <input type="radio" id="zeroSugar" name="sweetness" value="無糖">
            <label for="zeroSugar">無糖</label>
            <input type="radio" id="halfSugar" name="sweetness" value="半糖">
            <label for="halfSugar">半糖</label>
            <input type="radio" id="normalSugar" name="sweetness" value="正常">
            <label for="normalSugar">正常</label>
            <hr>
        </div>
        <button onclick="addToCart02()">加入購物車</button>
    </div>
</div> -->
