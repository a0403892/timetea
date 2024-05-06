<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>商品項目修改</h1>
    <table border="3">
        <tr>
            <td>原有名稱：</td><td>{{ $food->itemname }}</td>
        </tr>
        <tr>
            <td>原有價格：</td><td>{{ $food->itemprice }}</td>
        </tr>
        <tr>
        <form action="/foodedit/foodeditsuccess/{{ $foodClass->id }}/{{ $food->id }}" method="POST">
        @csrf
            <td>
                <label for="newitemname">新的名稱：</label>
            </td>
            <td>
                <input type="text" name="newitemname" value="{{ $food->itemname }}">
            </td>

        </tr>
        <tr>
            <td>
                <label for="newitemprice">新的價格：</label>
            </td>
            <td>
                <input type="text" name="newitemprice" value="{{ $food->itemprice }}">
            </td>
            <td>
                <button type="submit">修改</button>
            </td>
        </tr>
        </form>
    </table>
    <a href="/foodpicedit/{{ $foodClass->id }}/{{ $food->id }}">上傳/修改圖片</a>
    @if(session('success'))
    <div class="alert alert-success" style="color:#00f">
        {{ session('success') }}
    </div>
    @endif
    <p>回到<a href="/foodclassedit/{{ $foodClass->id }}">{{ $foodClass->classname }}</a></p>
</body>
</html>