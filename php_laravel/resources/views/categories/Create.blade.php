<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới danh mục</title>
</head>

<body>
    <h1>Thêm mới danh mục</h1>
    {{-- lấy ra tên của đường dẫn vói method là post --}}
    <form action="{{ route('categories.store') }}" method="post">
        {{-- @csrf chống lỗi dedot  --}}
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <button type="submit">save</button>
    </form>
</body>

</html>
