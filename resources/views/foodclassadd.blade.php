<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>種類修改</h1>
    <table border="3">
        <tr>
            <td>ID</td><td>種類名稱</td><td></td><td></td>
        </tr>
        @foreach($foodClassData as $i)
        <tr>
            <td>{{ $i->id }}</td>
            <td>
                <a href="/foodclassedit/{{ $i->id }}">
                {{ $i->classname }}
                </a>
            </td>
            <td>
                <a href="/foodclassadd/foodclassupdate/{{ $i->id }}">
                    修改
                </a>
            </td>
            <td><a href="/delete">刪除</a></td>
        </tr>
        @endforeach
    </table>
    <h1>種類新增</h1>
    <form action="/foodclassadd/addsuccess" method="POST">
        @csrf
        <input type="text" name="classname">
        <input type="submit">
    </form>
    @if(session('success'))
    <div class="alert alert-success" style="color:#00f">
        {{ session('success') }}
    </div>
    @endif
    <h2><a href="/setoption">設定附加屬性</a></h2>
</body>
</html>