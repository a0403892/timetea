@foreach($Food6 as $i)
<div class="item" onclick="showModel('{{ $i->itemname }}', '{{ $i->itemprice }}', '{{ $i->selectedoption }}')">
    @if(file_exists(public_path('pic/food6/' . $i->id . '.jpg')))
    <img src="pic/food6/{{ $i->id }}.jpg" alt="" class="item-img">
    @else
    <img src="pic/null.jpg" alt="" class="item-img">
    @endif
    <h2>{{ $i->itemname }}</h2>
    <div class="st">
        <h5>${{ $i->itemprice }}</h5>
    </div>
</div>
@endforeach

<!-- <div class="item" onclick="showModel06('就愛豬排鐵板麵')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>就愛豬排鐵板麵</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel06('川味麻婆豆腐蓋飯')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>川味麻婆豆腐蓋飯</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel06('家常瓜仔肉蓋飯')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>家常瓜仔肉蓋飯</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel06('咖哩雞肉燴飯')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>咖哩雞肉燴飯</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel06('泰式打拋豬燴飯')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>泰式打拋豬燴飯</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel06('咖哩唐揚雞蛋包飯')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>咖哩唐揚雞蛋包飯</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>

<div class="item" onclick="showModel06('三杯雞肉燴飯')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>三杯雞肉燴飯</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel06('奶油培根義大利麵')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>奶油培根義大利麵</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel06('茄汁檸檬義大利麵')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>茄汁檸檬義大利麵</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$35</h5>
    </div>
</div>
<div class="item" onclick="showModel06('青醬雞肉義大利麵')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>青醬雞肉義大利麵</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel06('卡波拿那焗飯')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>卡波拿那焗飯</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel06('巴沃斯特焗飯')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>巴沃斯特焗飯</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel06('蘿勒燻雞焗飯')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>蘿勒燻雞焗飯</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div>
<div class="item" onclick="showModel06('豬排烏龍湯麵')"><img src="pic/null.jpg" alt="" class="item-img">
    <h2>豬排烏龍湯麵</h2>
    <div class="st">
        <h5>尚餘：99份</h5>
        <h5>$45</h5>
    </div>
</div> -->