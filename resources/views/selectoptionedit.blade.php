<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>設定附加屬性</h1>
    <p><a href="/foodclassedit/{{ $foodClass->id }}">{{ $foodClass->classname }}</a>＞{{ $food->itemname }}</p>
    <p>請選擇此項商品需要的屬性</p>
    <table border="3">
        <tr>
            <td>附加屬性名稱</td>
        </tr>
        <form action="/selectoptioneditsuccess/{{ $foodClass->id }}/{{ $food->id }}" method="POST">
        @csrf
        @foreach($optionData as $i)
        <tr>
            <td>
                <input type="checkbox" name="selectedOptions[]" value="{{ $i->id }}" id="selectoption{{ $i->id }}" {{ in_array($i->id, explode(' ', $food->selectedoption)) ? 'checked' : '' }}>
                <label for="selectoption{{ $i->id }}">{{ $i->optionname }}</label><br>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <button type="submit">確定</button>
    </form>


    @if(session('success'))
    <div class="alert alert-success" style="color:#00f">
        {{ session('success') }}
    </div>
    @endif
</body>
</html>