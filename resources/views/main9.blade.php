@foreach($Food9 as $i)
<div class="item" onclick="showModel('{{ $i->itemname }}', '{{ $i->itemprice }}', '{{ $i->selectedoption }}')">
    @if(file_exists(public_path('pic/food9/' . $i->id . '.jpg')))
    <img src="pic/food9/{{ $i->id }}.jpg" alt="" class="item-img">
    @else
    <img src="pic/null.jpg" alt="" class="item-img">
    @endif
    <h2>{{ $i->itemname }}</h2>
    <div class="st">
        <h5>${{ $i->itemprice }}</h5>
    </div>
</div>
@endforeach