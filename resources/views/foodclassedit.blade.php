<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$foodClass->classname}}</h1>
    <table border="3">
        <tr>
            <td>ID</td><td>項目名稱</td><td>價格</td><td></td><td></td><td></td>
        </tr>
        @foreach ($itemData as $i)
        <tr>
            <td>{{ $i->id}}</td>
            <td>{{ $i->itemname}}</td>
            <td>{{ $i->itemprice}}</td>
            <td>
                <a href="/foodedit/{{$foodClass->id}}/{{$i->id}}">
                    修改名稱
                </a>
            </td>
            <td>
                <a href="/selectoptionedit/{{$foodClass->id}}/{{$i->id}}">
                    修改屬性
                </a>
            </td>
            <td><a href="/delete">刪除</a></td>
        </tr>
        @endforeach
    </table>
    <h1>項目新增</h1>
    <form action="/foodadd/addsuccess/{{$foodClass->id}}" method="POST">
        @csrf
        <input type="text" name="itemname">
        <input type="submit">
    </form>
    @if(session('success'))
    <div class="alert alert-success" style="color:#00f">
        {{ session('success') }}
    </div>
    @endif
    回到<a href="/foodclassadd">主頁面</a>
</body>
</html>