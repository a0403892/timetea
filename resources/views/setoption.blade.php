<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>設定附加屬性</h1>
    <table border="3">
        <tr>
            <td>ID</td><td>附加屬性名稱</td><td>屬性1</td><td>屬性2</td><td>屬性3</td><td>屬性4</td><td>屬性5</td><td>屬性6</td><td></td><td></td>
        </tr>
        </tr>
        @foreach($optionData as $i)
        <tr>
        <form action="/setoptionsuccess/{{ $i->id }}" method="POST">
            @csrf <!-- 添加 CSRF 令牌 -->
            <td>{{ $i->id }}</td>
            <td>{{ $i->optionname }}</td>
            <td><input type="text" name="value1" value="{{ $i->value1 }}"></td>
            <td><input type="text" name="value2" value="{{ $i->value2 }}"></td>
            <td><input type="text" name="value3" value="{{ $i->value3 }}"></td>
            <td><input type="text" name="value4" value="{{ $i->value4 }}"></td>
            <td><input type="text" name="value5" value="{{ $i->value5 }}"></td>
            <td><input type="text" name="value6" value="{{ $i->value6 }}"></td>
            <td>
                <button type="submit">確定修改</button>
            </td>
            <td>刪除此項</td>
        </form>
        </tr>
        @endforeach
    </table>
    <h1>附加屬性新增</h1>
    <form action="/addoptionsuccess" method="POST">
        @csrf
        <input type="text" name="optionname">
        <input type="submit">
    </form>
    @if(session('success'))
    <div class="alert alert-success" style="color:#00f">
        {{ session('success') }}
    </div>
    @endif
    回到<a href="/foodclassadd">主頁面</a>
</body>

<script>
    function updateOption(optionId) {
        // 獲取欲更新的屬性值
        var value1 = document.querySelector('input[name="value1"]').value;
        var value2 = document.querySelector('input[name="value2"]').value;
        var value3 = document.querySelector('input[name="value3"]').value;
        var value4 = document.querySelector('input[name="value4"]').value;
        var value5 = document.querySelector('input[name="value5"]').value;
        var value6 = document.querySelector('input[name="value6"]').value;

        // 構建要發送的資料對象
        var data = {
            id: optionId,
            value1: value1,
            value2: value2,
            value3: value3,
            value4: value4,
            value5: value5,
            value6: value6
        };

        // 使用 fetch API 發送 POST 請求到後端處理更新操作
        fetch('/updateOption', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Laravel 驗證所需的 CSRF token
            },
            body: JSON.stringify(data) // 將資料對象轉換為 JSON 字符串
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log(data); // 處理從後端收到的響應
            // 在此處理成功更新的情況，例如顯示成功訊息或重新載入頁面
        })
        .catch(error => {
            console.error('There was a problem with your fetch operation:', error);
            // 在此處理請求失敗的情況，例如顯示錯誤訊息
        });
    }
</script>
</html>