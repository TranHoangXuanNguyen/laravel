<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Danh sách sản phẩm</h2>
        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Thêm sản phẩm</a>
    @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['name'] }}</td>
{{--            <td>{{ $product['description'] }}</td>--}}
{{--            <td>{{ number_format($product['price'], 2) }} $</td>--}}
{{--            <td>{{ $product['quantity'] }}</td>--}}
            <td>
                <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-warning btn-sm">Sửa</a>
                <form action="{{ route('products.destroy', $product['id']) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Xóa sản phẩm này?')">Xóa</button>
                </form>
            </td>
        </tr>
    @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
</body>
</html>
