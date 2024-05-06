<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .imgclass > img {
            width: 220px;
            height: 220px;
        }
    </style>
</head>
<body>
    <h1>商品圖片修改</h1>
    <div>
        <h2>{{ $foodClass->classname }}</h2>
        <h3>{{ $food->itemname }}</h3>
        <p>目前圖片</p>
        <div class="imgclass">
            <!-- 檢查圖片是否存在 -->
            @if(file_exists(public_path("pic/food{$foodClass->id}/{$food->id}.jpg")))
            <!-- 如果圖片存在，顯示圖片 -->
            <img src="{{ asset("pic/food{$foodClass->id}/{$food->id}.jpg") }}" alt="商品圖片">
            @else
            <!-- 如果圖片不存在，顯示預設圖片 -->
            <img src="{{ asset('pic/null.jpg') }}" alt="預設圖片">
            @endif
        </div>
        <p>上傳新圖片(請上傳jpg檔)</p>
        <!-- 上傳圖片的表單 -->
        <form action="/foodpicedit/uploadimage/{{ $foodClass->id }}/{{ $food->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" id="imageInput" name="image">
            <button type="submit">上傳</button>
        </form>
    </div>
    @if(session('success'))
    <div class="alert alert-success" style="color:#00f">
        {{ session('success') }}
    </div>
    @endif
    <p>回到<a href="/foodclassedit/{{ $foodClass->id }}">{{ $foodClass->classname }}</a></p>

    <script>

    </script>
</body>
</html>