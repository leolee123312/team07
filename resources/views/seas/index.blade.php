<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>列印出所有魚類</title>

    <!-- 引入 Bootstrap 的 CSS 文件 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>列印出對應的海域</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>海域</th>
                    <th>地區</th>
                    <th>面積(平方千米)</th>
                    <th>平均深度</th>
                    <th>地貌</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seas as $item)
                <tr>
                    <td>{{ $item->ocean_name }}</td>
                    <td>{{ $item->region }}</td>
                    <td>{{ $item->area_sq_km }}</td>
                    <td>{{ $item->avg_depth }}</td>
                    <td>{{ $item->geomorphology }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- 引入 Bootstrap 的 JS 文件（可選，視情況而定）-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>