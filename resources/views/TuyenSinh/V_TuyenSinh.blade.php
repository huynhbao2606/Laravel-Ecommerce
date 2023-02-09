<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    Dung: npm run dev ==> De them file scss va js, trang web se tu refresh khi thay doi noi dung, khong can f5--}}
    {{--    Khi hoan thanh thi: npm run build ==> Luc nay khong can  run devn ua--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
<form method="post" action="tuyen-sinh-post" class="container">
    @csrf
    <div class="form-group m-3">
        <h1>Xếp Loại Tuyển Sinh</h1>
    </div>
    <div class="form-group m-3">
        <label for="toan">Điểm Môn Toán</label>
        <input type="text" id="toan" name="toan" required>
    </div>
    <div class="form-group m-3">
        <label for="ly">Điểm Môn Lý</label>
        <input type="text" id="ly" name="ly" required>
    </div>
    <div class="form-group m-3">
        <label for="hoa">Điểm Môn Hóa</label>
        <input type="text" id="hoa" name="hoa" required>
    </div>
    <div class="form-group m-3">
        <label for="kv">Chọn Khu Vực</label>
        <select id="kv" name="kv">
            <option value="1">Khu Vực 1</option>
            <option value="2">Khu Vực 2</option>
            <option value="3">Khu Vực 3</option>
            <option value="4">Khu Vực 4</option>
        </select>
    </div>
    <div class="form-group m-3">
        <input type="submit" value="Tính Điểm" class="btn btn-success">
    </div>
</form>
@if(isset($toan) && isset($ly) && isset($hoa))
    <div>Điểm Ưu Tiên:
        @if($kv==1 || $kv==2)
            5
            <?php
            $ut = 5;
            ?>
        @elseif($kv==3)
            3
            <?php
            $ut = 3;
            ?>
        @else
            0
            <?php
            $ut = 0;
            ?>
        @endif
    </div>
    <div>Tổng Điểm: {{ $toan + $ly + $hoa + $ut}}</div>
@endif
</body>
</html>
