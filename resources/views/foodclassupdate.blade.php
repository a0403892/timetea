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
            <td>原有名稱：</td><td>{{ $foodClass->classname }}</td>
        </tr>
        <tr>
            <form action="/foodclassadd/foodclassupdatesuccess/{{ $foodClass->id }}" method="POST">
                @csrf
                <td>
                    <label for="newname">新的名稱：</label>
                </td>
                <td>
                    <input type="text" name="newname">
                </td>
                <td>
                    <button type="submit">修改</button>
                </td>
            </form>
        </tr>
    </table>
    @if(session('success'))
    <div class="alert alert-success" style="color:#00f">
        {{ session('success') }}
    </div>
    @endif
    回到<a href="/foodclassadd">主頁面</a>
</body>
</html>