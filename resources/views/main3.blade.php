@foreach($Food3 as $i)
<div class="item" onclick="showModel('{{ $i->itemname }}', '{{ $i->itemprice }}', '{{ $i->selectedoption }}')">
    @if(file_exists(public_path('pic/food3/' . $i->id . '.jpg')))
    <img src="pic/food3/{{ $i->id }}.jpg" alt="" class="item-img">
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
<div class="item" onclick="showModel03('夏威夷果茶(無糖)')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>夏威夷果茶(無糖)</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel03('藍莓木槿果茶(無糖)')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>藍莓木槿果茶</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel03('黑醋粟果茶(無糖)')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>黑醋粟果茶(無糖)</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel03('水果冰茶')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>水果冰茶</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel03('萊姆蜜紅茶')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>萊姆蜜紅茶</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel03('夏威夷冰茶')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>夏威夷冰茶</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel03('夏日時光氣泡飲')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>夏日時光氣泡飲</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
 -->

<!-- 彈出視窗 -->
<!-- <div id="shadow03">
    <div id="model03">
        <button class="close-btn" onclick="hideModel03()">Ｘ</button>
        <h2 id="model03-title"></h2>
        <hr>
        <label for="quantity03">數量：</label>
        <input type="number" id="quantity03" value="1" min="1"><br>
        <hr>
        <label>冰熱：</label>
        <input type="radio" id="normalIce" name="temperature" value="正常">
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
        <hr>
        <div id="sweetnessOptions" class="hidden">
        <label>甜度：</label>
        <input type="radio" id="zeroSugar" name="sweetness" value="無糖">
        <label for="zeroSugar">無糖</label>
        <input type="radio" id="halfSugar" name="sweetness" value="半糖">
        <label for="halfSugar">半糖</label>
        <input type="radio" id="normalSugar" name="sweetness" value="正常">
        <label for="normalSugar">正常</label>
        </div>
        <hr>
        <button onclick="addToCart03()">加入購物車</button>
    </div>
</div> -->