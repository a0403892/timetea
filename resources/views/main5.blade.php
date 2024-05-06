@foreach($Food5 as $i)
<div class="item" onclick="showModel('{{ $i->itemname }}', '{{ $i->itemprice }}', '{{ $i->selectedoption }}')">
    @if(file_exists(public_path('pic/food5/' . $i->id . '.jpg')))
    <img src="pic/food5/{{ $i->id }}.jpg" alt="" class="item-img">
    @else
    <img src="pic/null.jpg" alt="" class="item-img">
    @endif
    <h2>{{ $i->itemname }}</h2>
    <div class="st">
        <h5>${{ $i->itemprice }}</h5>
    </div>
</div>
@endforeach


<!-- <div class="item" onclick="showModel05('兒童時光')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>兒童時光</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel05('輕食時光')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>輕食時光</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel05('法式茶旅')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>法式茶旅</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel05('活力滿滿')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>活力滿滿</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel05('遇見幸福')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>遇見幸福</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel05('千層蛋燒')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>千層蛋燒</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>

<div class="item" onclick="showModel05('香濃花生厚牛起司')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>香濃花生厚牛起司</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel05('卡拉雞吃飽堡')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>卡拉雞吃飽堡</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel05('澳洲純牛漢堡排')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>澳洲純牛漢堡排</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel05('法式蘿勒鮪魚特餐')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>法式蘿勒鮪魚特餐</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel05('泰式卡拉脆雞')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>泰式卡拉脆雞</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel05('蘿勒燻雞三明治')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>蘿勒燻雞三明治</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel05('三隻小雞炸薯拚盤')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>三隻小雞炸薯拚盤</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div> -->